
    

    <?php include "./includes/db.php"; ?>

    <?php  include "./includes/header.php"; ?>
    <?php  include "./admin/functions.php"; ?>
    <div class="container mx-auto ">
    <!-- Navigation -->
   <?php include "includes/navigation.php"; ?>

    <!-- Page Content -->


        <div class="grid w-full lg:gap-10 md:grid-cols-2 md:gap-2">

            <!-- Blog Entries Column -->
            
            
            
            <div class="grid grid-cols-1 gap-4 m-2 sm:w-full">
                <?php 
                if(isset($_SESSION['role'])){
                    $user_id = $_SESSION['user_id'];
                }
                
                
                ?>
                
                <?php 
                $post_per_page = 2;
                if(isset($_GET['page'])) {
                    $page = $_GET['page'];
             
                
                }else {
                    $page ="";
                }

                if($page == "" || $page == 1) {
                    $current_page = 0;
                }else {
                    $current_page = ($page * $post_per_page) - $post_per_page;
                
                }


                $post_count_query = "SELECT * FROM posts";
                $find_count =  mysqli_query($connection, $post_count_query);
                $count = mysqli_num_rows($find_count);

                $count = ceil($count / 2);

              


                
                $query = "SELECT * FROM posts ORDER BY post_id DESC LIMIT $current_page, $post_per_page ";
                $select_all_posts_query = mysqli_query($connection, $query);
                    
                    while($row = mysqli_fetch_assoc($select_all_posts_query)) {
                        $post_id = $row['post_id'];
                        $post_title = $row['post_title'];
                        $post_author = $row['post_author'];
                        $post_content = $row['post_content'];
                        $post_image = $row['post_image'];
                        $post_date = $row['post_date'];
                        $string = strip_tags($post_content);
                        if (strlen($string) > 200) {

                            // truncate string
                            $stringCut = substr($string, 0, 200);
                            $endPoint = strrpos($stringCut, ' ');

                            //if the string doesn't contain any space then it will cut without word basis.
                            $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                            $string .= "... <a class='text-blue-400 hover:text-blue-800' href='post.php?p_id=$post_id'>Read More </a>";
                        }
                    
                      ?>
                       

                <!--  Post -->
                <div class= "h-auto px-2 pt-4 pb-5 mx-auto mt-4 md:pb-7 smallScreenW sm:px-10 sm:w-4/5 md:w-full glass xl:w-9/12">

                        <!-- post title with icon -->
                <div class="flex items-center w-full mb-4 text-2xl text-blue-600 font-ralewaySB lg:text-3xl hover:text-blue-800 ">
               
                    <a  href="post.php?p_id=<?php echo $post_id; ?>&u_id=<?php echo $user_id; ?>" ><?php echo $post_title?></a>
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
                <p class="text-sm text-justify font-raleway"><?php echo $string?></p>
                <!-- Read more -->
                

                <!-- <hr>   -->
                </div>  
                          
                 <?php   }
                    
                ?>

               

            </div>
            

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php"; ?>
        <!-- /.row -->

    
        </div>
        <!-- Pagination -->
        <ul class= 'pager'>

<?php
for($i = 1; $i <= $count; $i++ ){

    if($i == $page) {
        echo "<li class='px-2 mx-10 text-center text-white bg-black border rounded cursor-pointer '>
    <a href='index.php?page={$i}'>{$i}</a>
    </li>";
    }else {
        echo "<li class='px-2 mx-10 text-center bg-white border rounded cursor-pointer '>
        <a href='index.php?page={$i}'>{$i}</a>
        </li>";
    }
   
}


?>
</ul>
        </div>
                       
  <?php include "./includes/footer.php"; ?>
