<?php include "includes/admin_header.php"; 
?>
    


    

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php";
        ?>

     

         
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
                        
                        
                   
                 
        <!-- /#page-wrapper -->

   <?php include "includes/admin_footer.php";
   ?>


