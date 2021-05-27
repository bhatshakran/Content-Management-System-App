<?php include "includes/admin_header.php"; 
?>

<div class="bg-white ">

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php";
        ?>


          

                <!-- Page Heading -->
               
                    <div class="flex w-full ">
                    <div class="w-5/12 lg:w-3/12">
                    <?php include "includes/admin_sidebar.php";
        ?>

                    </div>
               
                    <div id="result_container" class="w-full border-l ">
                    <h1 class="page-header">
                           Welcome to Admin
                           
                            <small>
                           <?php echo $_SESSION['username']; ?>
                                
                            </small>
                        </h1>

                                        
                        

   <?php include "includes/admin_footer.php";
   ?>


