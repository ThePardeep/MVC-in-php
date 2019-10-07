<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Coding Keeda </title>
<meta name="discription" content="Coding Keeda ">
<link rel="stylesheet" href="public/inc/Css/plugins.min.css">
<link rel="stylesheet" href="public/inc/Css/content.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
<link rel="stylesheet" href="public/inc/Css/style.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>
<!-- Header -->
<?php
require 'inc/headerAndNav.php';  
echo "<br>";
require 'inc/jumbotron.php'; ?>
<div class="Post-list-title">
<h1 class="display-3">Posts</h1>
</div>
<div class="ws-layout">

<?php require 'inc/sidebar.php'; ?>

<!-- Posts -->
<hr  class="hr-green">
<div   class="post-page">
<?php foreach($result as $post): ?>
<div class="hp-posts">

<div class="hp-post-box">
<!-- <div class="hp-post-img"><img src="logo.png" alt=""></div> -->
<div class="hp-post-title"><h1><?php echo $post['post_title']; ?></h1></div>
<div class="hp-post-info"><p> Author : <?php echo $post['post_author']; ?> | Publised Date : <?php echo $post['publised_date']; ?> </p></div>
<div class="hp-post-disc" ><p><?php echo $post['post_body']; ?></p></div>
<div class="hp-post-button"><a href="<?php echo ROOT_PATH; ?>/Post/<?php echo str_replace(' ', '-',$post['post_title']); ?>" class="btn btn-primary">Read More</a></div>
</div>
</div>
<?php endforeach;  ?>
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