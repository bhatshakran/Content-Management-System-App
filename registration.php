
    <?php include "./includes/db.php"; ?>

<?php  include "./includes/header.php"; ?>

<div class="container mx-auto ">
<?php include "includes/navigation.php" ?>

<?php
if(isset($_POST['submit'])){



    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


if(!empty($username) && !empty($email) && !empty($password) ){

    $username = mysqli_real_escape_string($connection, $username);
    $email = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);


    

     $enc_password = password_hash($password, PASSWORD_BCRYPT);

    $query = "INSERT INTO users (username, user_email, user_password, user_role)";

    $query .= "VALUES('{$username}', '{$email}', '{$enc_password}' , 'subscriber')";


    $register_user_query = mysqli_query($connection, $query);
    if(!$register_user_query) {

        die("QUERY FAILED" . mysqli_error($connection));
    }

    $message = "Your registration has been submitted!";

}else {
    $message = "Fields cannot be empty";
}


}else{
    $message ="";
}
   






?>



<section id="login">
<div class="px-4 py-8 glass">
<h3 >Register</h3>
<form method="post" role="form" action="registration.php" method="post" autcomplete="off">
<h6 class="px-3 mt-4 text-white bg-green-500"><?php echo $message ?></h6> 
<div class="form-group">
<label for="username">Username</label>
<input type="text" name="username" class="form-control" placeholder="Enter Username">
</div>
<div class="form-group">
<label for="email">Email</label>
<input type="email" name="email" class="form-control" placeholder="Enter Email">
</div>
<div class="form-group">
<label for="password">Password</label>
<input type="password" name="password" class="form-control" placeholder="Enter Password">
</div>
<input type="submit" value="Register" name="submit" class="myBtn">

</form>

</div>

</section>

</div>

<?php include "./includes/footer.php"; ?>