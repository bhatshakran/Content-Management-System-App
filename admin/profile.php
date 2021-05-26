<?php include "includes/admin_header.php"; 
?>
   
   
<?php

if(isset($_SESSION['username'])) {
    
    $username =  $_SESSION['username'];

    
    $query = "SELECT * FROM users WHERE username = '{$username}' ";
    
    $select_user_profile = mysqli_query($connection, $query);
    
    
    while($row = mysqli_fetch_array($select_user_profile)) {

    $the_user_id =  $row['user_id'];    
    $user_email =  $row['user_email'];
    $user_firstname =  $row['user_firstname'];
    $user_lastname =  $row['user_lastname'];
    $user_password =  $row['user_password'];
    $user_image =  $row['user_image'];
    $user_role =  $row['user_role'];
   
        
    }
}



if(isset($_POST['update_user'])) {
    
   $changed_username =  $_POST['username'];
   $changed_firstname =  $_POST['user_firstname'];
   $changed_lastname =  $_POST['user_lastname'];
   $changed_email =  $_POST['user_email'];
   $changed_password =  $_POST['user_password'];
//   $changed_username =  $_POST['username'];
//    
    
$query = "UPDATE users SET ";
$query .="username = '{$changed_username}', ";
$query .="user_firstname = '{$changed_firstname}',  ";
$query .= "user_lastname = '{$changed_lastname}',  ";
$query .= "user_email = '{$changed_email}', ";
$query .= "user_password = '{$changed_password}' ";
$query .= "WHERE user_id = $the_user_id ";
    
    
    $update_user_query = mysqli_query($connection, $query);
    
    if(!$update_user_query) {
        die("QUERY FAILED" . mysqli_error($connection));
    }
    
    header("Location: profile.php");
   
}


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
                        
                              <form action="" method="post" class="form">
                                  <div class="form-group">
                                     <label for="username">
                                         Username
                                     </label>
                                      <input type="text" class="form-control"
                                      name="username"
                                      value="<?php echo $username?>">
                                  </div>
                                  
                                  <div class="form-group">
                                     <label for="username">
                                         Firstname
                                     </label>
                                      <input type="text" class="form-control"
                                      name="user_firstname"
                                      value="<?php echo $user_firstname?>">
                                  </div>
                                  
                                  <div class="form-group">
                                     <label for="username">
                                         Lastname
                                     </label>
                                      <input type="text" class="form-control"
                                      name="user_lastname"
                                      value="<?php echo $user_lastname?>">
                                  </div>
                                  
                                  <div class="form-group">
                                     <label for="username">
                                         Email
                                     </label>
                                      <input type="email" class="form-control"
                                      name="user_email"
                                      value="<?php echo $user_email?>">
                                      
                                      
                                      
                                      <div class="form-group">
                                     <label for="username">
                                         Password
                                     </label>
                                      <input type="password" class="form-control"
                                      name="user_password"
                                      value="<?php echo $user_password?>">
                                  </div>
                                  </div>
                                  
                                  <div class="form-group">
                                      <button class="btn btn-primary" type="submit" name='update_user'>Update User</button>
                                  </div>
                                  
                              </form>
                       
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
