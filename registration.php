
 <?php include "./includes/db.php"; ?>

<?php  include "./includes/header.php"; ?>
<?php  include "./admin/functions.php"; ?>

<div class="container mx-auto ">
<?php include "includes/navigation.php" ?>

<?php
if(isset($_POST['submit'])){



    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];




    $error = [
        'username'=> '',
        'email'=>'',
        'password'=>''
    ];

    if(username_exists($username)) {
        $error['username'] = 'Username already exists, Pick another one.';
    }

    if(strlen($username) < 4) {
        $error['username'] ='Username needs to be longer than 4 characters!';
    }

    if($username === '') {
        $error['username'] = 'Username cannot be empty';
    }


    if(email_exists($email)) {
        $error['email'] = 'Email already exists, Try a different one.';
    }

    if($email == '') {
        $error['email'] = 'Email cannot be empty';
    }

    

    if($password == '') {
        $error['password'] = 'Password cannot be empty';
    }


    foreach($error as $key => $value) {


        if(empty($value)) {


            // register_user($username, $email, $password);
            // login_user($username, $password);
        }


    }


}




?>



<section id="login">
<div class="px-4 py-8 glass">
<h3 class="font-league">Register</h3>
<form method="post" role="form" action="registration.php" method="post" autcomplete="off">
<div class="form-group">
<label for="username" class="font-league">Username</label>
<input type="text" name="username" class="form-control" placeholder="Enter Username">
<p><?php echo isset($error['username']) ? $error['username'] : '' ?></p>
</div>
<div class="form-group">
<label for="email" class="font-league">Email</label>
<input type="email" name="email" class="form-control" placeholder="Enter Email">
<p><?php echo isset($error['email']) ? $error['email'] : '' ?></p>
</div>
<div class="form-group">
<label for="password" class="font-league">Password</label>
<input type="password" name="password" class="form-control" placeholder="Enter Password">
<p><?php echo isset($error['password']) ? $error['password'] : '' ?></p>
</div>
<input type="submit" value="Register" name="submit" class="myBtn">

</form>

</div>

</section>

</div>

<?php include "./includes/footer.php"; ?>