<div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-file-text fa-5x"></i>
                                            </div>
                                            <div class="text-right col-xs-9">
                                            
                                           
                    
                </div>
                                                </div>
                                                <a href="./posts.php">
                                                    <div class="panel-footer">
                                                        <span class="pull-left">View Details</span>
                                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="panel panel-green">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <i class="fa fa-comments fa-5x"></i>
                                                        </div>
                                                        <div class="text-right col-xs-9">
                                                        <?php
                                                            
                                                            $query = "SELECT * FROM comments ";
                                                            $select_all_comments = mysqli_query($connection, $query);
                                                            
                                                        $comment_count = mysqli_num_rows($select_all_comments);
                                                            
                                                            
                                                            echo "<div class='huge'>$comment_count</div>
                                                            <div>Comments</div>"
                                                        ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="./comments.php">
                                                    <div class="panel-footer">
                                                        <span class="pull-left">View Details</span>
                                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="panel panel-yellow">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <i class="fa fa-user fa-5x"></i>
                                                        </div>
                                                        <div class="text-right col-xs-9">
                                                        <?php
                                                            
                                                            $query = "SELECT * FROM users ";
                                                            $select_all_users = mysqli_query($connection, $query);
                                                            
                                                        $user_count = mysqli_num_rows($select_all_users);
                                                            
                                                            
                                                            echo "<div class='huge'>$user_count</div>
                                                            <div>Users</div>"
                                                        ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="./users.php">
                                                    <div class="panel-footer">
                                                        <span class="pull-left">View Details</span>
                                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="panel panel-red">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <i class="fa fa-list fa-5x"></i>
                                                        </div>
                                                        <div class="text-right col-xs-9">
                                                            <?php
                                                            
                                                            $query = "SELECT * FROM categories ";
                                                            $select_all_categories = mysqli_query($connection, $query);
                                                            
                                                        $categories_count = mysqli_num_rows($select_all_categories);
                                                            
                                                            
                                                            echo "<div class='huge'>$categories_count</div>
                                                            <div>Categories</div>"
                                                        ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="./categories.php">
                                                    <div class="panel-footer">
                                                        <span class="pull-left">View Details</span>
                                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    </div>

<!-- /.row -->

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





 
                <div class="row">
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
          chart: {
            title: '',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
         </div>          
                

     <!-- <div id="columnchart_material" style="width: 'auto'; height: 500px;"></div>                -->

                
                
                 
                 
                 
         

         
            <!-- /.container-fluid -->

        </div>


                    </div>
                       
                    </div>
                 
                <!-- /.row -->
                
                
                
                
                       
                <!-- /.row -->

        <!-- /#page-wrapper -->