
<?php


if(isset($_POST['create_post'])) {
    
    $post_title = $_POST['title'];
        
        $post_author = $_POST['author'];                           
                            
        $post_category_id = $_POST['post_category'];                             
        $post_status = $_POST['post_status'];                             
        $post_image = $_FILES['image']['name'];
 
        $post_image_temp = $_FILES['image']['tmp_name']; 
    
        $post_tags = $_POST['post_tags'];
    
      $post_content = $_POST['post_content'];
     
    
        $post_date = date('d-m-y'); 
    

    
    move_uploaded_file($post_image_temp, "../images/$post_image");
    
    
    $query = "INSERT INTO posts(post_category_id, post_title, post_author, post_date, post_image, post_content, post_tags, post_status)";
    
    $query .= "VALUES({$post_category_id}, '{$post_title}','{$post_author}',now(),'{$post_image}','{$post_content}','{$post_tags}','{$post_status}' )";
    
    
    $create_post_query = mysqli_query($connection, $query);
    
    confirm($create_post_query);
    
}




?>
  

  
  
  <form action="" method="post" class="px-3 py-4 mt-8 text-left glass" enctype="multipart/form-data">
   <h3 class="mb-3 ">Add a Post</h3>
    <div class="form-group">
    <label for="title">Post Title</label>
    <input type="text" class="form-control" name="title">
    </div>
    
    
    <div class="form-group">
    
    <label for="">Category</label>
    <select name="post_category" id="" class="form-control">
        
        
        <?php
        
         $query = "SELECT * FROM categories";
                                        

        $select_categories = mysqli_query($connection, $query);

        confirm($select_categories);
             while($row = mysqli_fetch_assoc($select_categories)) {
                $cat_title = $row['cat_title'];
                $cat_id = $row['id'];

                echo "<option value='{$cat_id}'>{$cat_title}</option>" ;
                 }
        
        ?>
        
     
        
        
    </select>
    
    
    
    
    
    </div>
   
    <div class="form-group">
    <label for="">Post Author</label>
    <input type="text" class="form-control" name="author">
    </div>
    <div class="form-group">
    <label for="post_tags">Post Tags</label>
    <input type="text" class="form-control" name="post_tags">
    </div>
    <div class="form-group">
    <label for="post_image">Post Image</label>
    <input type="file" name="image" class="form-control">
    <div class="form-group">
    <select name="post_status" id="" class="form-control">
      <option value="draft">Post Status</option>
      <option value="draft">Draft</option>
      <option value="publish">Publish</option>
    </select>
  
    </div>
    <div class="form-group">
    <!-- <label for="post_content" id="summernote">Post Content</label> -->
        <textarea  id="summernote" class="form-control" name="post_content" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
    <input type="submit" value="Publish Post" name="create_post" class="btn btn-primary">
    </div>
    </div>
    
</form>

<script>
      $('#summernote').summernote({
        placeholder: 'Enter Content',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    </script>