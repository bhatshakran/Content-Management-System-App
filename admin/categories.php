<?php include "includes/admin_header.php";

?>
    


    <div class="mx-auto 2xl:container ">

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php";
        ?>
         <!-- apply flex to sidebar and result container -->
        <div class="flex-row w-full h-full gap-6 py-4 overflow-hidden md:flex">
        <div class="bg-white border shadow-lg md:w-2/5 rounded-3xl border-gray-50 lg:w-1/4">
        <?php include "includes/admin_sidebar.php";?>

        </div>
  


                <!-- Page Heading -->
                
                        
                        
                <div id="result_container" class="mx-2 glass md:mr-4 md:w-4/5">
                        <div class="block w-full ">
                           
                           <?php
                            
                           create_category();
                            
                            ?>
                           
<!--                           CREATE CATEGORY FORM-->
                           
                            <form action="categories.php" method="post" class="mx-4 mt-8 ">
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
                                    value="Add Category" class="cursor-pointer myBtn">
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
                        
                
                             <table class="w-full mx-auto mt-20 mb-8 text-center extrasmall md:table-auto">
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
                    </div>
                    </div>
         

   <?php include "includes/admin_footer.php";
   ?>

