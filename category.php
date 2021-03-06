
    <?php
    if(!headers_sent()) {
        session_start();
    }
?>
    <?php include "./includes/db.php"; ?>
    <?php  include "./includes/header.php"; ?>
    <?php  include "./admin/functions.php"; ?>
    <div class="container mx-auto ">

    <!-- Navigation -->
   <?php include "includes/navigation.php"; ?>


   <div class="grid w-full gap-10 md:grid-cols-2">

<!-- Blog Entries Column -->







<div class="grid grid-cols-1 gap-6 m-2 ">
            
                <?php 
              
                
                if(isset($_GET['category'])) {
                    
                    $post_category_id = $_GET['category'];
              
                
                 if(is_admin($_SESSION['username'])){

                     $query1 = mysqli_prepare($connection, "SELECT post_id, post_title, post_author, 
                     post_date, post_image, post_content FROM posts WHERE post_category_id = ? ");

                 }else if(!is_admin($_SESSION['username'])){
                
                    $query2 = mysqli_prepare($connection, "SELECT post_id, post_title, post_author,
                     post_date, post_image, post_content FROM posts WHERE post_category_id = ? AND post_status = ? ");

                     $published = 'publish';
                 }


                 

                 if(isset($query1)) {


                    mysqli_stmt_bind_param($query1, "i", $post_category_id);

                    mysqli_stmt_execute($query1);

                    mysqli_stmt_bind_result($query1, $post_id, $post_title, $post_author, 
                    $post_date, $post_image, $post_content);

                     $stmt = $query1;
                    

                 }else {


                    mysqli_stmt_bind_param($query2, "is", $post_category_id, $published);

                    mysqli_stmt_execute($query2);

                    mysqli_stmt_bind_result($query2, $post_id, $post_title, $post_author, 
                    $post_date, $post_image, $post_content);
                   
                  
                   $stmt = $query2;
                
                 
                 }

                 $limited_text = substr($post_content, 0, 200);
              
              
                 mysqli_stmt_store_result($stmt);
                 $count = mysqli_stmt_num_rows($stmt);

                if(mysqli_stmt_num_rows($stmt) === 0) {
                    echo "No Categories";
                }  
                while(mysqli_stmt_fetch($stmt)):
                    
                      ?>
                            <!--  Post -->
                            <div class= "px-2 pt-4 pb-5 mx-auto mt-4 smallScreenW sm:px-10 sm:w-2/3 md:w-full glass xl:w-9/12">
                            <!-- post title with icon -->
                            <div class="flex items-center w-full mb-4 text-2xl font-normal text-blue-600 sm:text-4xl hover:text-blue-800">

                            <a  href="post.php?p_id=<?php echo $post_id; ?> "><?php echo $post_title?></a>
                            <div id="icon">
                            <!-- post icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                            </svg>
                            </div>
                            </div>
                            <!-- author -->
                            <p class="mb-1 text-gray-500 text-md">
                            by <a class='text-blue-400 hover:text-blue-800' href="author_posts.php?author=<?php echo $post_author?>&&p_id=<?php echo $post_id?>"><?php echo $post_author?></a>
                            </p>
                            <!-- date -->
                            <p class="text-xs font-thin text-gray-500"><span class="glyphicon glyphicon-time"></span> <?php echo $post_date?></p>
                            <!-- image -->
                            <a href="post.php?p_id=<?php echo $post_id; ?>">
                            <img class="w-full mt-2 mb-3 max-h-80 sm:w-1/2 sm:h-1/3" src="images/<?php echo $post_image;?> " alt="image">
                            </a>
                            <!-- content -->
                            <p class="font-sans text-sm font-light text-justify"><?php echo $limited_text?></p>
                            <!-- Read more -->
                            <a class="text-blue-400 hover:text-blue-800" href="post.php?p_id=<?php echo $post_id; ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>   
                            </div>
                 <?php endwhile;
                mysqli_stmt_close($stmt);
 
                 
                }  
                ?>

               

          
         

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php"; ?>
            </div>
        <!-- Pagination -->
 
        </div>
  <?php include "./includes/footer.php"; ?>