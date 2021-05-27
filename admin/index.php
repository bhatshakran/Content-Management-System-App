<?php include "includes/admin_header.php"; 
?>

<div class="bg-gray-300 ">

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php";
        ?>


          

                <!-- Page Heading -->
               
                    <div class="flex w-full gap-6">
                    <div class="w-5/12 mt-4 lg:w-3/12 glass rounded-2xl ">
                    <?php include "includes/admin_sidebar.php";
        ?>

                    </div>
               
                    <div id="result_container" class="w-full mt-4 glass">
                    <!-- <h1 class="page-header">
                           Welcome to Admin
                           
                            <small>
                           <!-- 
                                
                            <!-- </small> -->
                        <!-- </h1> --> 

                        <div id="statistics grid grid-cols-2">
                        <div id="posts-count" class="block w-1/3 px-2 py-8 mx-auto my-8 text-xl font-bold text-center text-gray-800 bg-gray-300 rounded-3xl">
                        <div class="w-full mx-auto text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto w-14 h-14" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" />
                            </svg>
                         </div>
                        <?php
                                                
                        $query = "SELECT * FROM posts ";
                        $select_all_posts = mysqli_query($connection, $query);
                        
                         $post_count = mysqli_num_rows($select_all_posts);
                        
                        
                        echo "<div class='font-thin' >Total posts</div>
                        <div>$post_count </div>
                        
                        
                        "
                    
                    ?>
                        </div>
                        </div>

                    </div>     
                    </div>   
</div>         
                        

   <?php include "includes/admin_footer.php";
   ?>


