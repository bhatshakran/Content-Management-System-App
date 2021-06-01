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
   
   
   
    


    <div id="wrapper w-full mx-auto  2xl:container">

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php";
        ?>
        <!-- apply flex to sidebar and result container -->
        <div class="flex-row w-full h-full gap-6 py-4 overflow-hidden md:flex">
        <div class="bg-white border shadow-lg md:w-2/5 rounded-3xl border-gray-50 lg:w-1/4">
        <?php include "includes/admin_sidebar.php";?>
        </div>

       
                    
                         
                            <div id="result_container" class="mx-2 glass md:mr-4 md:w-4/5">    
                              <form action="" method="post" class="px-4 py-6 form">
                              <h3 class='font-league'>Profile</h3>
                                  <div class="form-group">
                                     <label for="username" class='font-league'>
                                         Username
                                     </label>
                                      <input type="text" class="form-control"
                                      name="username"
                                      value="<?php echo $username?>">
                                  </div>
                                  
                                  <div class="form-group">
                                     <label for="username" class='font-league'>
                                         Firstname
                                     </label>
                                      <input type="text" class="form-control"
                                      name="user_firstname"
                                      value="<?php echo $user_firstname?>">
                                  </div>
                                  
                                  <div class="form-group">
                                     <label for="username" class='font-league'>
                                         Lastname
                                     </label>
                                      <input type="text" class="form-control"
                                      name="user_lastname"
                                      value="<?php echo $user_lastname?>">
                                  </div>
                                  
                                  <div class="form-group">
                                     <label for="username" class='font-league'>
                                         Email
                                     </label>
                                      <input type="email" class="form-control"
                                      name="user_email"
                                      value="<?php echo $user_email?>">
                                      
                                      
                                      
                                      <div class="form-group">
                                     <label for="username" class='font-league'>
                                         Password
                                     </label>
                                      <input type="password" class="form-control"
                                      name="user_password"
                                      value="" placeholder='Change Password'>
                                  </div>
                                  </div>
                                  
                                  <div class="form-group">
                                      <button class="myBtn" type="submit" name='update_user'>Update User</button>
                                  </div>
                                  
                              </form>
                              </div>
                       
                    </div>
                </div>
                <!-- /.row -->

         
   

   <?php include "includes/admin_footer.php";
   ?>

</body>

</html>
