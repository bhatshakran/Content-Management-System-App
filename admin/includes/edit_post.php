<?php

if(isset($_GET['p_id'])) {
    
   $the_post_id =   $_GET['p_id'];
    


}
$query = "SELECT * FROM posts";
    $select_post_by_id = mysqli_query( $connection, $query );

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

?>
  
  
  
  
  
  
  
  
  
  
  <form action="" method="post" enctype="multipart/form-data">
   
    <div class="form-group">
    <label for="title">Post Title</label>
    <input type="text" value="<?php echo $post_title; ?>" class="form-control" name="title">
    </div>
    <div class="form-group">
    <label for="post_category">Post Category Id</label>
    <input type="text" class="form-control"  value="<?php echo $post_category_id; ?>" name="post_category_id">
    </div>
    <div class="form-group">
    <label for="">Post Author</label>
    <input type="text" value="<?php echo $post_author; ?>" class="form-control" name="author">
    </div>
    <div class="form-group">
    <label for="post_tags">Post Tags</label>
    <input type="text" value="<?php echo $post_tags; ?>" class="form-control" name="post_tags">
    </div>
    <div class="form-group">
    <label for="post_image">Post Image</label>
    <input type="file" name="image">
    <div class="form-group">
    <label for="post_status">Post Status</label>
    <input type="text" value="<?php echo $post_status; ?>" class="form-control" name="post_status">
    </div>
    <div class="form-group">
    <label for="post_content">Post Content</label>
        <textarea  class="form-control" name="post_content" cols="30" rows="10">
               <?php echo $post_content; ?>
        </textarea>
     
    </div>
    <div class="form_group">
    <input type="submit" value="Publish Post" name="create_post" class="btn btn-primary">
    </div>
    </div>
    
</form>