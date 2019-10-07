<?php session_start();
if(isset($_SESSION['LoginStatus']) and $_SESSION['LoginStatus'] === "200" ){
 require("App/Controller/User.php"); 
    $User = new User();
    $Data = $User->AllDataForUpdation($_POST["post_id"]);
    $Data = mysqli_fetch_array($Data);
} else {
  header("Location:".ROOT_PATH."/login");
}
if (isset($_POST['submit'])) {
   $ID=$_POST['post_id'];
   $PostTitle = $_POST["post_title"];
   $PostDiscription = $_POST["post_discription"];
   $PostAuthor = $_POST["post_author"];
   $PostKeywords = $_POST["post_keyword"];
   $PostCategories = $_POST["post_categories"];
   $PostBody = $_POST["post_body"];
   $User->UpdatePost($ID,$PostTitle,$PostDiscription,$PostKeywords,$PostCategories,$PostBody,$PostAuthor);
   header("Location:".ROOT_PATH."/allposts");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title> Update Post</title>
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
.main{
    border:4px solid #f1f1f1;
    padding : 10px;
    margin :10px;
}
.main .BTD{
    font-size : 20px ;
    margin-bottom: 10px;
    border-bottom: 4px solid #f1f1f1;
    font-family: Raleway, Courier, monospace;
}
.main .upt-form{
    font-family: Raleway, Courier, monospace;
}
.main .upt-form form input{
  font-size:20px;
  height: 40px ;
}

.main .upt-form form textarea{
    font-size:20px;
}
.main .upt-form form button{
    font-size:20px;
  background-color: #00bb77;
  border: 4px solid #f1f1f1;
  color: white;
  font-family: Raleway;
  padding : 5px 10px 5px 10px;
  border-radius: 5px;
}
.main .upt-form form button:hover{
    background-color: #1273e2;
}
</style>
</head>
<body>
<!-- Header -->
<?php
require 'App/View/inc/headerAndNav.php';  
echo "<br>"; ?>
<!-- Main -->

<div class="main">
    <!-- BTD = BACK TO DASHBAORD -->
    <div class="BTD"><a href="<?php echo ROOT_PATH; ?>/dashboard/">Back To Dashboard</a></div>
    <div class="upt-form">
    <form action="<?php  $_SERVER["PHP_SELF"]; ?>" method="POST" >
   <input type="hidden" value="<?php echo $Data['post_id']; ?>" name="post_id">
   <label  for="Title">Post Title :</label>
   <input name="post_title" placeholder="Title" value="<?php echo $Data['post_title']; ?>" type="text" id="Title" class="form-control"> <br>
   <label  for="post_discription">Post Discription :</label>
   <input name="post_discription" value="<?php echo $Data['post_body']; ?>" placeholder="Discription" type="text" id="post_discription" class="form-control"> <br>
   <label for="post_author">Author</label>
   <input name="post_author" value="<?php echo $Data['post_author']; ?>" placeholder="Author Name" type="text" id="post_author" class="form-control"> <br>  
   <label  for="post_body">Post Body :</label>
   <textarea name="post_body" id="post_body" class="form-control" cols="30" rows="10"><?php echo $Data['post_content']; ?></textarea> <br>
   <label  for="post_keyword">Keywords :</label>
   <input name="post_keyword" value="<?php echo $Data['post_keyword']; ?>" placeholder="Add Keyword Seprated With Commmes" type="text" id="post_keywords" class="form-control"> <br>
   <label for="post_categories">Category :</label> <br>
   <input name="post_categories" value="<?php echo $Data['post_categories']; ?>" placeholder="Add Categories Seprated With Commmes" type="text" id="post_categories" class="form-control"> 
   <br><button type="submit" name="submit">Update</button>
 </form>
    </div>
</div>


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
