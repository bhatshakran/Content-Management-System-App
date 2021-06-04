
 <?php include "./includes/db.php"; ?>

<?php  include "./includes/header.php"; ?>

<div class="container mx-auto ">
<?php include "includes/navigation.php" ?>

<?php
if(isset($_POST['submit'])){



    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);


    $error = [
        'username'=> '',
        'email'=>'',
        'password'=>''
    ];



    if(strlen($username) < 4) {
        $error['username'] ='Username needs to be longer than 4 characters!'
    }






?>



<section id="login">
<div class="px-4 py-8 glass">
<h3 class="font-league">Register</h3>
<form method="post" role="form" action="registration.php" method="post" autcomplete="off">
<h6 class="px-3 mt-4 text-white bg-green-500"><?php echo $message ?></h6> 
<div class="form-group">
<label for="username" class="font-league">Username</label>
<input type="text" name="username" class="form-control" placeholder="Enter Username">
</div>
<div class="form-group">
<label for="email" class="font-league">Email</label>
<input type="email" name="email" class="form-control" placeholder="Enter Email">
</div>
<div class="form-group">
<label for="password" class="font-league">Password</label>
<input type="password" name="password" class="form-control" placeholder="Enter Password">
</div>
<input type="submit" value="Register" name="submit" class="myBtn">

</form>

</div>

</section>

</div>

<?php include "./includes/footer.php"; ?>