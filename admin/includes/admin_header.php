
<?php include "../includes/db.php"?>
<?php include "functions.php"; ?>
<?php ob_start(); ?>
<?php session_start();
?>










<?php



if(!isset($_SESSION['role'])) {header("Location: ../index.php");}

?>






















<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CMS Admin </title>



    <link rel="stylesheet" href="../dist/css/styles.css" />

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link rel ="stylesheet" href="css/summernote-lite.css" >
   <script src="js/summernote-lite.min.js"></script>

</head>

<body class=" debug-screens">