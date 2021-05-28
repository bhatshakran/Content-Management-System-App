<?php include "includes/admin_header.php"; 
?>
    


  

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php";
        ?>

      

            <div class="container w-full text-center sm:mx-auto">

             
                        
<?php
                        
                        
if(isset($_GET['source'])) {
    
    $source = $_GET['source'];
    
}else {

    $source ='';
}
    switch($source) {

        case 'add_user':
        include "includes/add_user.php";
        break;
        case 'edit_user':
        include "includes/edit_user.php";
        break;
        default:
        include "includes/view_all_users.php";
        break;
    
    }

            
?>
                        
                        
                   
                       
                    </div>
                

   <?php include "includes/admin_footer.php";
   ?>

