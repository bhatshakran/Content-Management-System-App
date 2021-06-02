
<?php





if(isset($_GET['edit_user'])) {
    
    
   $the_user_id = $_GET['edit_user'];
    
     $query = "SELECT * FROM users WHERE user_id = $the_user_id ";
    $select_users_query = mysqli_query( $connection, $query );

    while( $row = mysqli_fetch_assoc( $select_users_query ) ) {
        $user_id = $row['user_id'];
        
        $username = $row['username'];       
        $user_password = $row['user_password'];                             
        $user_firstname = $row['user_firstname'];                             
        $user_lastname = $row['user_lastname'];                             
        $user_email = $row['user_email'];                             
        $user_image = $row['user_image'];                             
        $user_role = $row['user_role']; 
                          
        
    
    }
    
    
    
    
    
    
    
    
    
    
}













if(isset($_POST['edit_user'])) {
    

        
        $user_firstname = $_POST['user_firstname'];  
    
        $user_lastname = $_POST['user_lastname']; 
    
        $user_role = $_POST['user_role'];                           
                            
        $username = $_POST['username'];
    
        $user_email = $_POST['user_email'];                             
//        $post_image = $_FILES['image']['name'];
// 
//        $post_image_temp = $_FILES['image']['tmp_name']; 
    
        $user_password = $_POST['user_password'];
  
    
      
        $query = "SELECT user_password FROM users WHERE user_id = $the_user_id";
        $get_user_query = mysqli_query($connection, $query);
        confirm($get_user_query);
    
        $row = mysqli_fetch_array($get_user_query);
    
        $db_user_password = $row['user_password'];
    

if(!empty($user_password)) {
   

    if($db_user_password != $user_password) {
        $hashed_password = password_hash($user_password, PASSWORD_BCRYPT);
    }

$query = "UPDATE users SET ";
$query .="user_firstname = '{$user_firstname}', ";
$query .="user_lastname = '{$user_lastname}', ";
$query .= "user_role = '{$user_role}', ";
$query .= "username = '{$username}', ";
$query .= "user_email = '{$user_email}', ";
$query .= "user_password = '{$hashed_password}' ";

$query .= "WHERE user_id = {$the_user_id} ";
$update_user = mysqli_query($connection,$query);
    
    
 confirm($update_user);
 echo "User Updated <a href='users.php' class='text-blue-500'>View Users?</a>";
} else{
    $query = "UPDATE users SET ";
$query .="user_firstname = '{$user_firstname}', ";
$query .="user_lastname = '{$user_lastname}', ";
$query .= "user_role = '{$user_role}', ";
$query .= "username = '{$username}', ";
$query .= "user_email = '{$user_email}', ";
$query .= "user_password = '{$db_user_password}' ";
$query .= "WHERE user_id = {$the_user_id} ";
$update_user = mysqli_query($connection,$query);
    
    
 confirm($update_user);
 echo "User Updated without change in password<a href='users.php' class='text-blue-500'>View Users?</a>";
}
    
    
       
    

    
    
}




?>
  

  
  
  <form action="" method="post" enctype="multipart/form-data" class="px-4 py-6 text-left">
   <h3 class="border-b border-gray-600 font-league">Edit User</h3>
   <div class="form-group">
    <label for="user_firstname" class="font-league">Firstname</label>
    <input type="text" class="form-control" value="<?php echo $user_firstname ?>" name="user_firstname">
    </div>
    <div class="form-group">
    <label for="user_lastname" class="font-league">Lastname</label>
    <input type="text" class="form-control" value="<?php echo $user_lastname ?>" name="user_lastname">
    </div>
    
    <div class="form-group">   
    <label for="user_role" class="font-league">Role</label>
    <select class="form-control" name="user_role" id="" value="<?php echo $user_role ?>">
        <option value="<?php echo $user_role?>"><?php echo $user_role ?></option>
         <?php
    
        if($user_role === 'admin' ) {
            
              echo "<option value='subscriber'>subscriber</option>";
            
        }else {
          echo " <option value='admin'>admin</option>";

        }
    
        ?>
      
       
  
    </select>

    </div>
   
    
    <div class="form-group">
    <label for="username" class="font-league">Username</label>
    <input type="text" name="username" value="<?php echo $username ?>" class="form-control">
      </div>
    <div class="form-group">
    <label for="user_email" class="font-league">Email</label>
    <input type="email" class="form-control" value="<?php echo $user_email ?>" name="user_email">
    </div>
    <div class="form-group">
    <label for="" class="font-league">Password</label>
        <input type="password" class="form-control" 
        value="" name="user_password" placeholder='If not changed you can login with your previous password'>
    </div>
   
    <div class="form_group">
    <input type="submit" value="Edit User" name="edit_user" class="myBtn">
    </div>
    
    
</form>