<?php $i=0; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Page Not Found</title>
<meta name="discription" content="Coding Keeda ">
<link rel="stylesheet" href="/public/inc/Css/plugins.min.css">
<link rel="stylesheet" href="../public/inc/Css/content.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
<link rel="stylesheet" href="/public/inc/Css/style.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>
<!-- Header -->
<?php
require 'inc/headerAndNav.php';  
echo "<br>";?>

<!-- Page NF = Page Not Found -->
<div class="page-NF">

<h1 class="display-1" style="text-align:center;">Page Not Found </h1>
<hr class="hr-green">
<p class="container display-3"  style="text-align:center;">
       We Can't Find The Post You're Looking for.
       Go To Home Page <a  style="text-decoration:none;" href="<?php echo ROOT_PATH; ?>">Home</a>
</p>

<div class="recent-posts"  style="background:4px solid #f1f1f1;border:2px solid wheat;margin:10px 0 10px 0;">
<ul >
<?php foreach($opt_data as  $recent_posts) : ?>
    <?php  if ($i<5): ?>
        <li><a href="<?php echo ROOT_PATH; ?>/Post/<?php echo str_replace(' ', '-',$recent_posts['post_title']); ?>"><i class="zmdi zmdi-long-arrow-right"></i><?php echo $recent_posts["post_title"]; ?></a> </li>
    <?php $i++; endif;?>
    <?php endforeach; ?>
    </ul>
</div>

</div>

<!-- Footer -->
<?php
echo "<br>";
include 'inc/footer.php';  ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/public/inc/Js/home.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
    
</body>
</html>