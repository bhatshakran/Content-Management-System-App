<?php include "includes/admin_header.php"; 
?>

<div class="overflow-hidden bg-gray-100 md:max-h-screen">

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php";
        ?>


          

                <!-- Page Heading -->
               
                    <div class="flex-row w-full h-full gap-6 overflow-hidden md:flex">
                    <div class="w-full mt-4 bg-white border shadow-lg rounded-3xl border-gray-50 md:w-5/12 lg:w-3/12">
                    <?php include "includes/admin_sidebar.php";
        ?>

                    </div>
               
               <!-- results container -->
                    <div id="result_container" class="w-full mt-4 glass">
                  
                    <!-- stats start -->
                        <div id="statistics" class="grid w-full grid-cols-2 gap-4 px-2 h-2/3 sm:grid-cols-3 lg:grid-cols-4 sm:h-3/5 lg:h-1/3" >
                        <!-- panel one -->
                        <div id="posts-count" class="panel">
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
                    <div class="flex items-center justify-center w-full text-sm font-normal text-blue-600">
                   <a href='./comments.php' > View Details</a>
            
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 " viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    
                    </div>
                        </div>
                            <!-- panel two -->
                       

                        <div id="users-count" class="panel">
                        <div class="w-full mx-auto text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-14 w-14" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                        </svg>
                         </div>
                         <?php
                                                            
                        $query = "SELECT * FROM users ";
                        $select_all_users = mysqli_query($connection, $query);
                        
                    $user_count = mysqli_num_rows($select_all_users);
                        
                        
                        echo "<div class='font-thin' >Total users</div>
                        <div>$user_count </div>"
                    ?>
                    <div class="flex items-center justify-center text-sm font-normal text-center text-blue-600">
                   <a href='./users.php'> View Details</a>
                   <span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 " viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    </span>
                    </div>
                        </div>


                        <!-- panel three -->
                        <div id="categories-count" class="panel">
                        <div class="w-full mx-auto text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-14 w-14" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9.243 3.03a1 1 0 01.727 1.213L9.53 6h2.94l.56-2.243a1 1 0 111.94.486L14.53 6H17a1 1 0 110 2h-2.97l-1 4H15a1 1 0 110 2h-2.47l-.56 2.242a1 1 0 11-1.94-.485L10.47 14H7.53l-.56 2.242a1 1 0 11-1.94-.485L5.47 14H3a1 1 0 110-2h2.97l1-4H5a1 1 0 110-2h2.47l.56-2.243a1 1 0 011.213-.727zM9.03 8l-1 4h2.938l1-4H9.031z" clip-rule="evenodd" />
                        </svg>
                         </div>
                         <?php
                                                            
                        $query = "SELECT * FROM categories ";
                        $select_all_categories = mysqli_query($connection, $query);
                        
                    $categories_count = mysqli_num_rows($select_all_categories);
                        
                        
                        echo "<div class='font-thin' >Total categories</div>
                        <div>$categories_count </div>"
                    ?>
                    <div class="flex items-center justify-center text-sm font-normal text-center text-blue-600">
                   <a href='./users.php'> View Details</a>
                   <span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 " viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    </span>
                    </div>
                        </div>

                        <!-- panel four -->
                        <div id="comments-count" class="panel">
                        <div class="w-full mx-auto text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-14 w-14" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd" />
                        </svg>
                         </div>
                         <?php
                                                            
                        
                        
                        $query = "SELECT * FROM comments ";
                        $select_all_comments = mysqli_query($connection, $query);
                        
                    $comment_count = mysqli_num_rows($select_all_comments);
                        
                        
                        echo "<div class='font-thin' >Total comments</div>
                        <div>$comment_count </div>"
                    ?>
                    <div class="flex items-center justify-center text-sm font-normal text-center text-blue-600">
                   <a href='./users.php'> View Details</a>
                   <span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 " viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    </span>
                    </div>
                        </div>


                        








                        </div><!-- stats end -->

                        <!-- Bar data -->


                        <!-- get different types of data from db -->
                        <?php

                            $query = "SELECT * FROM posts WHERE post_status = 'draft'  ";
                            $select_all_draft_posts = mysqli_query($connection, $query);

                            $post_draft_count = mysqli_num_rows($select_all_draft_posts);   
                                                    
                                                    
                                                    
                            $query = "SELECT * FROM comments WHERE comment_status = 'unapproved'  ";
                            $select_all_unapproved_comments = mysqli_query($connection, $query);

                            $unapp_comments_count = mysqli_num_rows($select_all_unapproved_comments); 
                                                    
                                                    
                                                    
                                                    
                            $query = "SELECT * FROM users WHERE user_role = 'subscriber'  ";
                            $select_all_subscribers = mysqli_query($connection, $query);

                            $subscribers_count = mysqli_num_rows($select_all_subscribers); 
                                                        
                                                        
                            ?>

                            <!-- bars javascript -->
                            <script type="text/javascript">
                            google.charts.load('current', {'packages':['bar']});
                            google.charts.setOnLoadCallback(drawChart);

                            function drawChart() {
                                var data = google.visualization.arrayToDataTable([
                                ['Data', 'Count'],
                                    
                                    
                                <?php
                                    
                                                    
                                    $element_text =['Active Posts','Draft Posts', 'Categories', 'Users', 'Comments', 'Pending Comments', 'Subscribers '];
                                                
                                    $element_count =[$post_count, $post_draft_count, $categories_count, $user_count, $comment_count,  $unapp_comments_count, $subscribers_count];    
                                                
                                                
                                    for($i = 0; $i < 7; $i++) {
                                        
                                        
                            echo "['{$element_text[$i]}'" . "," . "{$element_count[$i]}],";
                                        
                                        
                                        
                                        
                                    }
                                                    
                                                        
                                                    
                                                    
                                                    
                                                 
                                                    
                                ?>
                                    
                                    
                                    
                                    
                                    
                                    
                                    

                                
                                ]);

                                
 var options = {
    chartArea: {
      // leave room for y-axis labels
      width: '84%',
      
    },
    legend: {
      position: 'top'
    },
    width: 500,

    // maxHeight:400,
    };


                                

                                var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                                chart.draw(data, google.charts.Bar.convertOptions(options));
                            }
                            </script>
                           <div class="flex justify-center ">
                            <div id="columnchart_material" class="w-full mt-4"  style="background:none"></div>    
                            </div>

                            

                    </div>


                    
                        </div>

                    </div>


                    
                         
             
                        

   <?php include "includes/admin_footer.php";
   ?>


