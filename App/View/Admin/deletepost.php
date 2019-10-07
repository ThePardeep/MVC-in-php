<?php session_start();
if(isset($_SESSION['LoginStatus']) and $_SESSION['LoginStatus'] === "200" ){
 require("App/Controller/User.php"); 
    $User = new User();
     $Result = $User->TitleAndId();
} else {
  header("Location:".ROOT_PATH."/login");
}
if(isset($_POST['del_btn'])){
    $postid = $_POST["post_id"];
    $User->DeletePost($postid);
  header("Location:".ROOT_PATH."/deletepost");
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title> Delete Post</title>
<meta name="discription" content="Coding Keeda ">
<link rel="stylesheet" href="./public/inc/Css/plugins.min.css">
<link rel="stylesheet" href="./public/inc/Css/content.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
<link rel="stylesheet" href="./public/inc/Css/style.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
.box { 
    border: 2px solid #f1f1f1;
    margin-bottom: 10px;
    border-left: 25px solid red;
    margin-left: 2px;
} 
.box p{
    display: inline-block;
    font-size: 15px;
    margin-left: 10px;
    font-family: Raleway, Courier, monospace;
}
.box p .p_id{
    font-size : 20px ;
    margin-right: 10px;
    font-family: Raleway, Courier, monospace;
}
.box form {
    display: inline-block;
      margin-left: 10px;
}
.box form input{
    display:inline-block;
    width:40px;
    margin-top:0px;
    height:45px;
    margin-bottom: 4px;
}
.box form button {
    display: inline-block;
    border-radius: 2px;
    margin: 2px 0px 2px 0px;
    background-color: rgb(15, 184, 91);
    border: 2px solid #f1f1f1;
    color: white;
    font-size: 20px;
    font-family: Raleway;
    outline: none;
    padding: 5px;
}
.box form button:hover{
    background-color: rgb(57, 141, 236);
}
</style>
</head>
<body>
<!-- Header -->
<?php
require 'App/View/inc/headerAndNav.php';  
echo "<br>"; ?>
<!-- Main -->

<?php foreach($Result as $Data): ?>
<div class="box">
<p><i class="p_id"><?php echo $Data['post_id']; ?> </i><?php echo $Data['post_title']; ?></p>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<input type="number" hidden value="<?php echo $Data['post_id']; ?>" name="post_id" class="form-control">
<button name="del_btn"  type="submit">Delete</button>
</form>
</div>
<?php endforeach; ?>

<!-- Footer -->
<?php
echo "<br>";
include 'App/View/inc/footer.php';  ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="./public/inc/Js/home.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>

</body>
</html>
