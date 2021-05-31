
    <?php include "./includes/db.php"; ?>

<?php  include "./includes/header.php"; ?>

<div class="container mx-auto ">
<?php include "includes/navigation.php" ?>

<?php
if(isset($_POST['submit'])){
    echo "Its working";
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