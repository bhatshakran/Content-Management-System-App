
<?php


if(isset($_POST['create_user'])) {
    

        
        $user_firstname = $_POST['user_firstname'];  
    
        $user_lastname = $_POST['user_lastname']; 
    
        $user_role = $_POST['user_role'];                           
                            
        $username = $_POST['username'];
    
        $user_email = $_POST['user_email'];                             
//        $post_image = $_FILES['image']['name'];
// 
//        $post_image_temp = $_FILES['image']['tmp_name']; 
    
        $user_password = $_POST['user_password'];
    
    
     

    

    
//    move_uploaded_file($post_image_temp, "../images/$post_image");
    
    
    $query = "INSERT INTO users(user_firstname, user_lastname, user_role, username, user_email, user_password) ";
    
    $query .= "VALUES('{$user_firstname}', '{$user_lastname}','{$user_role}','{$username}','{$user_email}','{$user_password}' )";
    
    
    
    $create_user_query = mysqli_query($connection, $query);
    
    confirm($create_user_query);


    echo "User created: " . "  " . " <a href='users.php' class='text-blue-400'>View users</a> ";
    
}




?>
  

  
  
  <form action="" method="post" class="px-3 py-4 mt-8 text-left " enctype="multipart/form-data">
  <h3 class="mb-3 border-b border-gray-600 font-league">Add a User</h3>
   <div class="form-group">
    <label for="user_firstname" class="font-league">Firstname</label>
    <input type="text" class="form-control" name="user_firstname">
    </div>
    <div class="form-group">
    <label for="user_lastname" class="font-league">Lastname</label>
    <input type="text" class="form-control" name="user_lastname">
    </div>
    
    <div class="form-group">
    
    <label for="user_role" class="font-league">Role</label>
    <select name="user_role" id="" class='form-control'>
  
        <option value="subscriber">Select Options</option>
        <option value="admin">Admin</option>
        <option value="subscriber">Subscriber</option>
  
    </select>
    
    
    
    
    
    </div>
   
    
    <div class="form-group">
    <label for="username" class="font-league">Username</label>
    <input type="text" name="username" class="form-control">
      </div>
    <div class="form-group">
    <label for="user_email" class="font-league">Email</label>
    <input type="email" class="form-control" name="user_email">
    </div>
    <div class="form-group">
    <label for="user_password" class="font-league">Password</label>
        <input type="password" class="form-control" name="user_password">
    </div>
   
    <div class="form_group">
    <input type="submit" value="Create User" name="create_user" class="myBtn">
    </div>
    
    
</form>