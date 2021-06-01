<?php include "includes/admin_header.php"; 
?>
    


    
<div class="mx-auto 2xl:container">
        <!-- Navigation -->
 <?php include "includes/admin_navigation.php";
 ?>
 <!-- apply flex to sidebar and result container -->
 <div class="flex-row w-full h-full gap-6 py-4 overflow-hidden md:flex">
 <div class="bg-white border shadow-lg md:w-2/5 rounded-3xl border-gray-50 lg:w-1/4">
<?php include "includes/admin_sidebar.php";?>

</div>

     

<div id="result_container" class="mx-2 glass md:mr-4 md:w-4/5">
<?php
                        
                        
if(isset($_GET['source'])) {
    
    $source = $_GET['source'];
    
}else {

    $source ='';
}
    switch($source) {

        case 'add_post':
        include "includes/add_posts.php";
        break;
        case 'edit_post':
        include "includes/edit_post.php";
        break;
        default:
        include "includes/view_all_posts.php";
        break;
    
    }

            
?>
  </div>                        
      </div>           
                        </div>                  
                 
        <!-- /#page-wrapper -->

   <?php include "includes/admin_footer.php";
   ?>


