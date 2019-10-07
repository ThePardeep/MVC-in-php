<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>About Us </title>
<meta name="discription" content="Coding Keeda ">
<link rel="stylesheet" href="public/inc/Css/plugins.min.css">
<link rel="stylesheet" href="public/inc/Css/content.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
<link rel="stylesheet" href="public/inc/Css/style.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
.about_page{
    border: 4px solid #f1f1f1;
    padding: 15px 30px;
}
.about_page h1{
    font-family:Raleway;
    font-size:40px;
    padding :10px;
    margin-bottom: 5px;
}
.about_page p{
    margin-top: 20px;
    font-family:Raleway;
    font-size: 20px;
}
hr{
    margin-bottom: 30px;
}
.about_page .author h3{
    padding :10px;
    border-radius: 5px;
    color: white;
    font-size: 20px;
    background-color: black;
    display: inline;
    font-family:Raleway;
}
.about_page .author a{
    text-decoration: none;
    font-family: Raleway,serif;
    font-size: 20px;
    display: block;
    margin-top: 20px;
}
</style>
</head>
<body>
<!-- Header -->
<?php
require 'inc/headerAndNav.php';  
echo "<br>";
 ?>

<div class="about_page">

<h1>About Coding Keeda </h1>
<hr class="hr-green">
<div class="author">
<h3>Author :</h3>
<p>
Hii Friends  My Name Is <b>Pardeep Saini</b>. I Am Student Of B.sc Computer Science In Govt College Barwala Panchkula.
</p>
<p class="contacts">
<h3>Social Media :</h3>
<a href="https://www.facebook.com/Codingkeeda1/">Facebook</a>
<a href="https://twitter.com/coding_keeda">Twitter</a>
<a href="https://github.com/ThePardeep">GitHub</a>
<p>Email : Pardeepsaini7927@gmail.com</p>
</p>
</div>

</div>


<!-- Footer -->
<?php
echo "<br>";
include 'inc/footer.php';  ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="public/inc/Js/home.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
    
</body>
</html>