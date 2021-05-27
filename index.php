
    

    <?php include "./includes/db.php"; ?>
    <?php  include "./includes/header.php"; ?>

    <!-- Navigation -->
   <?php include "includes/navigation.php"; ?>

    <!-- Page Content -->
    <div class="container mx-auto ">

        <div class="grid gap-10 md:grid-cols-2">

            <!-- Blog Entries Column -->
            
            
            
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
                
                
                <?php 
                
                $query = "SELECT * FROM posts";
                $select_all_posts_query = mysqli_query($connection, $query);
                    
                    while($row = mysqli_fetch_assoc($select_all_posts_query)) {
                        $post_id = $row['post_id'];
                        $post_title = $row['post_title'];
                        $post_author = $row['post_author'];
                        $post_content = $row['post_content'];
                        $post_image = $row['post_image'];
                        $post_date = $row['post_date'];
                    
                      ?>
                       

                <!-- First Blog Post -->
                <div class="px-10 py-4 mt-4 border-2 border-gray-100 rounded">


                <div class="flex items-center mb-4 text-2xl font-normal text-blue-400 hover:text-blue-800">
               
                    <a  href="post.php?p_id=<?php echo $post_id; ?> "><?php echo $post_title?></a>
                    <div id="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                        </svg>
                    </div>
                    
                </div>
                <p class="mb-1 text-gray-500 text-md">
                    by <a href="index.php"><?php echo $post_author?></a>
                </p>
                <p class="text-xs font-thin text-gray-500"><span class="glyphicon glyphicon-time"></span> <?php echo $post_date?></p>
               
                <img class="w-24 h-24 mt-2 mb-3" src="images/<?php echo $post_image;?> " alt="image">
               
                <p class="text-sm "><?php echo $post_content?></p>
                <a class="text-blue-400 hover:text-blue-800" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <!-- <hr>   -->
                </div>  
                          
                 <?php   }
                    
                ?>

               

            </div>
            

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php"; ?>
        <!-- /.row -->

    

      

  <?php include "./includes/footer.php"; ?>