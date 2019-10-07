<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title><?php echo $result['post_title']; ?></title>
<meta name="discription" content="Coding Keeda ">
<link rel="stylesheet" href="../public/inc/Css/plugins.min.css">
<link rel="stylesheet" href="../public/inc/Css/content.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
<link rel="stylesheet" href="../public/inc/Css/style.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>
<!-- Header -->
<?php
require 'inc/headerAndNav.php';  
echo "<br>";
require 'inc/jumbotron.php'; ?>

<div class="ws-layout">

<?php require 'inc/sidebar.php'; ?>

<!-- Posts -->
<hr id="only-bigscreen" class="hr-green">

<div style="margin-left:2px;"  class="post-page post-content-design">

<div class="post-content-title">
       <h1><?php echo $result['post_title']; ?></h1>
</div>

<div class="post-content-infos">
       <p><b>Published Date :</b> <?php echo $result['publised_date']; ?> </p>
       <p><b>Author :</b> <?php echo $result['post_author']; ?></p>
</div>
<hr class="hr-green"> 
<div class="post-content-content">
<p>
 <?php echo html_entity_decode($result['post_content']); ?>
</p>
</div>

</div>

</div>

<!-- Footer -->
<?php
echo "<br>";
include 'inc/footer.php';  ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../public/inc/Js/home.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
    
</body>
</html>