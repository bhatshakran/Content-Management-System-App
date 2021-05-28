<?php include "includes/admin_header.php"; 
?>
    


    <div id="container mx-auto text-center w-full">

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php";
        ?>

  


                <!-- Page Heading -->
                
                        
                        
                        
                        <div class="col-xs-6">
                           
                           <?php
                            
                           create_category();
                            
                            ?>
                           
<!--                           CREATE CATEGORY FORM-->
                           
                            <form action="categories.php" method="post" class="mx-4 mt-8">
                                <div class="form-group">
                                   
                                   <label for="cat_title">
                                     <h4> Add Category</h4> 
                                   </label>
                                    <input type="text"
                                    name="cat_title" class="form-control">
                                </div>
                                 <div class="form-group">
                                    <input type="submit"
                                    name="submit"
                                    value="Add Category" class="px-2 py-2 text-white bg-blue-400 rounded-lg cursor-pointer">
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
                        
                
                             <table class="w-full mx-auto mt-20 mb-8 text-center extrasmall md:table-auto glass">
                                <thead class="border-b ">
                                    <tr>
                                        <th class="tabledata">Id</th>
                                        <th class="tabledata">Category Title</th>
                                        <th class="tabledata">Action #1</th>
                                        <th class="tabledata">Action #2</th>
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
         

   <?php include "includes/admin_footer.php";
   ?>

