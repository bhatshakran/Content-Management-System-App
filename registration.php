
    <?php include "./includes/db.php"; ?>

<?php  include "./includes/header.php"; ?>

<div class="container mx-auto ">
<?php include "includes/navigation.php" ?>

<?php
if(isset($_POST['submit'])){



    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username);
    $email = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);


    $query = "SELECT randSalt FROM users";
    $select_randsalt_query = mysqli_query($connection, $query);

    if(!$select_randsalt_query) {

        die("QUERY FAILED" . mysqli_error($connection));
    }


    $row =  mysqli_fetch_array($select_randsalt_query);
    $salt = $row['randSalt'];


    $query = "INSERT INTO users (username, user_email, user_password, user_role)";

    $query .= "VALUES('{$username}', '{$email}', '{$password}' , 'subscriber')";


    $register_user_query = mysqli_query($connection, $query);
    if(!$register_user_query) {

        die("QUERY FAILED" . mysqli_error($connection));
    }



}



?>



<section id="login">
<div class="px-4 py-8 glass">
<h3>Register</h3>
<form method="post" role="form" action="registration.php" method="post" autcomplete="off">

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