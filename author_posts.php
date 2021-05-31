<?php include "./includes/db.php"; ?>
    <?php  include "./includes/header.php"; ?>
    <div class="container mx-auto my-4 lg:w-1/2">
    <!-- Navigation -->
   <?php include "includes/navigation.php"; ?>


<?php

if(isset($_GET['p_id'])) {
    $author_name = $_GET['author'];
    $post_id = $_GET['p_id'];


    $query = "SELECT * FROM posts WHERE post_author = '{$author_name}' ";
    $get_all_author_posts = mysqli_query($connection, $query);

    if(!$get_all_author_posts) {
        die("QUERY FAILED" . mysqli_error($connection));
    }

    while($row = mysqli_fetch_assoc($get_all_author_posts)) {
         $post_id =    $row['post_id'];                
        $post_title = $row['post_title'];
        $post_author = $row['post_author'];
        $post_content = $row['post_content'];
        $post_image = $row['post_image'];
        $post_date = $row['post_date'];
?>
                <div class="px-6 py-6 my-12 text-left glass">
                 <h2 class='text-left'>
                    <a href="post.php?p_id=<?php echo $post_id ?> "><?php echo $post_title?></a>
                </h2>
                <p class="w-full mx-auto ">
                    by <?php echo $post_author?>
                </p>
                <p class=""> <span class="glyphicon glyphicon-time"></span> <?php echo $post_date?></p>
               
                <img class="w-auto my-4 " src="images/<?php echo $post_image;?> " alt="image">
               
                <p class="text-justify mx"><?php echo $post_content?></p>
                </div>    
<?php }


}?>







               

          
                
                  </div>