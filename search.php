
    

    <?php include "./includes/db.php"; ?>
    <?php  include "./includes/header.php"; ?>

    <!-- Navigation -->
   <?php include "includes/navigation.php"; ?>

    <!-- Page Content -->
    <div class="container mx-auto ">

        <div class="grid w-full lg:gap-10 md:grid-cols-2">

            <!-- Blog Entries Column -->
            
            
            
            <div class="grid grid-cols-1 gap-6 m-2 ">
                
                
            <?php
                   if(isset($_POST['submit'])){

                      $search = $_POST['search'];
                       
                       
                       $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%' ";
                       
                       
                       $search_query = mysqli_query($connection,  $query);
                       
                       
                       if(!$search_query) {
                           
                           die("QUERY FAILED" . mysqli_error($connection));
                       }
                       
                       
                       $count = mysqli_num_rows($search_query);
                       
                      
                       
                       if($count == 0) {
                      
                           echo "<h1>NO RESULT </h1>";
                       } else {
                            
                
              
                    
                    while($row = mysqli_fetch_assoc($search_query)) {  
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
 <div class= "h-auto px-2 pt-4 pb-5 mx-auto mt-4 smallScreenW sm:px-10 sm:w-2/3 md:w-full glass xl:w-9/12">

<!-- post title with icon -->
<div class="flex items-center w-full mb-4 text-2xl font-normal text-blue-600 lg:text-4xl hover:text-blue-800">

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
by <a href="index.php"><?php echo $post_author?></a>
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


<!-- <hr>   -->
</div>  
                          
                 <?php   }
                       }}
                ?>

               

            </div>
            

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php"; ?>
        <!-- /.row -->

    
        </div>
        </div>
   
  <?php include "./includes/footer.php"; ?>
