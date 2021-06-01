<div id="result_container" class="mx-2 glass md:mr-4 md:w-4/5">

<?php


//Get form data
if(isset($_GET['p_id'])) {
    
   $the_post_id = $_GET['p_id'];
    
    $query = "SELECT * FROM posts WHERE post_id = $the_post_id ";
    $select_post_by_id = mysqli_query($connection, $query );






    while( $row = mysqli_fetch_assoc( $select_post_by_id ) ) {
        $post_id = $row['post_id'];
        
        $post_author = $row['post_author'];                           
        $post_title = $row['post_title'];                             
        $post_category_id = $row['post_category_id'];                             
        $post_status = $row['post_status'];                             
        $post_image = $row['post_image'];                        
        $post_tags = $row['post_tags'];                             
        $post_comment_count = $row['post_comment_count'];                 
        $post_date = $row['post_date']; 
        $post_content = $row['post_content']; 


    }

    




//Update method
if(isset($_POST['update_post'])) {
    


        $post_author = $_POST['author'];  
   
        $post_title = $_POST['title'];                             
        $post_category_id = $_POST['post_category'];                             
        $post_status = $_POST['post_status'];                             
        $post_image = $_FILES['image']['name'];                             
        $post_image_temp = $_FILES['image']['tmp_name'];                             
        $post_tags = $_POST['post_tags'];                             

        $post_content = $_POST['post_content']; 

         move_uploaded_file($post_image_temp, "../images/$post_image");
    
        if(empty($post_image)) {
            $query = "SELECT * FROM posts WHERE post_id = $the_post_id ";
           
            
            $select_image = mysqli_query($connection, $query);
            
            
            while($row = mysqli_fetch_array($select_image)) {
             
                $post_image = $row['post_image'];
                
            }
        }
    
    
    
$query = "UPDATE posts SET ";
$query .="post_title = '{$post_title}', ";
$query .="post_category_id = '{$post_category_id}', ";
$query .= "post_date = now(), ";
$query .= "post_author = '{$post_author}', ";
$query .= "post_status = '{$post_status}', ";
$query .= "post_tags = '{$post_tags}', ";
$query .= "post_content = '{$post_content}', ";
$query .= "post_image = '{$post_image}'  ";
$query .= "WHERE post_id = $the_post_id ";



$update_post = mysqli_query($connection,$query);

confirm($update_post);

echo  "<p class='w-full px-2 py-3 mt-4 text-left text-white bg-green-500 '> 
Post Updated. <a href='../post.php?p_id=$the_post_id' class='text-blue-800'>View Post</a>
or <a href='posts.php' class='text-blue-800'>Edit More Posts</a>
</p>";
    
//    header("Location: ./posts.php");
}

        
}


    

?>
  
  
  
  
  
  
  
  
  
  
  <form action="" method="post" enctype="multipart/form-data" class='px-4 py-8 mt-10 text-left '>
   <h3 class="border-b border-gray-500 font-league">Edit Post</h3>
    <div class="form-group">
    <label for="title" class="font-league">Post Title</label>
    <input type="text" value="<?php echo $post_title; ?>" class="form-control" name="title">
    </div>
    
    <div class="form-group">
    
    <label for="" class="font-league">Select Category</label>
    <select name="post_category" id="" class='form-control'>
        
        
        <?php
        
         $query = "SELECT * FROM categories";
                                        

        $select_categories = mysqli_query($connection, $query);

        confirm($select_categories);
             while($row = mysqli_fetch_assoc($select_categories)) {
                $cat_title = $row['cat_title'];
                $cat_id = $row['id'];

                echo "<option value='{$cat_id}' >{$cat_title}</option>" ;
                 }
        
        ?>
        
     
        
        
    </select>
    
    
    
    
    
    </div>
    
    <div class="form-group">
    <label for="" class="font-league">Edit Author</label>
    <input type="text" value="<?php echo $post_author; ?>" class="form-control" name="author">
    </div>


    <div class="form-group">
    <label for="" class="font-league">Status</label>
    <select class="form-control" name="post_status" id=""  >
    <option value="<?php echo $post_status ?>" ><?php  echo $post_status;?></option>
    <?php
        if($post_status === 'publish') {
            echo "<option value='draft' >Draft</option>" ;
        }else {
            echo "<option value='published' >Publish</option>" ;
        }

    ?>
    </select>
    </div>
    
    <div class="form-group">
    <label for="post_tags" class="font-league">Edit Tags</label>
    <input type="text" value="<?php echo $post_tags; ?>" class="form-control" name="post_tags">
    </div>
    
    <div class="form-group">
    <img width = "100" src="../images/<?php echo $post_image; ?>" alt="image" >
       
<!--        </br>-->
     <label for="post_image" class="font-league">Change Image</label>
    <input type="file" name="image">
      </div>
    <div class="form-group">
      
    
    <div class="form-group">
    <label for="post_content" class="font-league">Edit Content</label>
        <textarea id="summernote" class="form-control" name="post_content" cols="30" rows="10"><?php echo $post_content; ?>
        </textarea>
     
    </div>
    
    <div class="form_group">
    <input type="submit" value="Update Post" name="update_post" class="mt-4 myBtn">
    </div>
    </div>
    
</form>
</div>  