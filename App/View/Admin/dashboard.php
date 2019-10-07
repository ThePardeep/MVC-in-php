<?php  
session_start();
if(isset($_SESSION['LoginStatus']) and $_SESSION['LoginStatus'] === "200" ){
 require("App/Controller/User.php"); 
    $User = new User();
   $userdata = $_SESSION['userdata'];
   $posts_recent = $User->RecentPost();
  
} else {
  header("Location:".ROOT_PATH."/login");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title> Admin Main</title>
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
require 'App/View/inc/headerAndNav.php';  
echo "<br>";
 ?>

 <!-- Login Info -->

 <div class="login-main">

<div class="admin-info">
<div class="admin-title"><h1>Welcome <?php echo $userdata["Name"];  ?></h1></div>
 <div class="admin-eAndm"><p>Email : <?php echo $userdata['email']; ?></p></div>
 <div class="admin-eAndm"><p>Mobile : <?php echo $userdata['mobile']; ?></p></div>
 <div class="logout-btn"><a class="btn btn-primary" href="<?php echo ROOT_PATH; ?>/login">LogOut</a></div>
 <hr >
</div>

<!-- post-opr = Post Operation -->

<div class="post-opr">
<h1 class="post-opr-heading">Post Operation</h1>
<hr class="hr-green" style="margin-bottom:15px;">
<div class="insert-btn">
  <a class="oprbtn" href="<?php echo ROOT_PATH; ?>/insertpost">Insert Post</a>
</div>

<div class="update-btn">
  <a class="oprbtn" href="<?php echo ROOT_PATH; ?>/allposts">Update Post</a>
</div>

<div class="delete-btn">
  <a class="oprbtn" href="<?php echo ROOT_PATH; ?>/deletepost">Delete Post</a>
</div>
<hr style="margin-top:20px;">
</div>

<div class="admin-recent-post">

<h1 class="recentpost-heading">Recent Posts</h1>
<hr class="hr-green" >

<ul>
<?php foreach($posts_recent as $p):?>
  <li><a href="<?php echo ROOT_PATH; ?>/Post/<?php echo str_replace(' ', '-',$p['post_title']);  ?> "><?php echo $p['post_title']; ?><i class="zmdi zmdi-long-arrow-right" ></i> </a></li>
<?php endforeach; ?>
</ul>

</div>

</div>
 


<!-- Footer -->
<?php
echo "<br>";
include 'App/View/inc/footer.php';  ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../public/inc/Js/home.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
    
</body>
</html>