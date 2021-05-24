<?php include "includes/admin_header.php"; 
?>
    


    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php";
        ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Welcome to Admin
                            <small>Author</small>
                        </h1>
                        
                        
                        
                        <div class="col-xs-6">
                           
                           <?php
                            
                           create_category();
                            
                            ?>
                           
<!--                           CREATE CATEGORY FORM-->
                           
                            <form action="categories.php" method="post">
                                <div class="form-group">
                                   
                                   <label for="cat_title">
                                       Add Category
                                   </label>
                                    <input type="text"
                                    name="cat_title" class="form-control">
                                </div>
                                 <div class="form-group">
                                    <input type="submit"
                                    name="submit"
                                    value="Add Category" class="btn btn-primary">
                                </div>
                            </form><!--                           CREATE CATEGORY FORM-->
                            
                            
<!--                            UPDATE CATEGORY FORM-->
                    
                    <?php 
                           if(isset($_GET['edit'])) {
                               
                               $cat_id = $_GET['edit'];
                               
                               include "includes/update_categories.php";
                             
                           } 
                            
                            
                            ?>
                     
<!--                            UPDATE CATEGORY FORM-->
                        </div>
                        
                        <div class="col-xs-6">
                             <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Title</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                           
                           <?php find_all_categories();  ?>
                                        
                                        
                                        
                                        <?php delete_category(); ?>
                                         
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                       
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   <?php include "includes/admin_footer.php";
   ?>

</body>

</html>
