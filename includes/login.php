<?php include "db.php"; ?>






<?php



if(isset($_POST['login'])) {

    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    
    
    $cleaned_username = mysqli_real_escape_string($connection, $username);
   $cleaned_password = mysqli_real_escape_string($connection, $password);
    
    
    
    $query = "SELECT  * FROM users WHERE username = '{$cleaned_username}' ";
    
    $select_user_query = mysqli_query($connection, $query);
    
   if(!$select_user_query) {
       
       die("QUERY FAILED" . mysqli_error($connection));
   }
    
    
    while($row = mysqli_fetch_array($select_user_query)) {
        echo $db_id = $row['user_id'];
    }


}










?>