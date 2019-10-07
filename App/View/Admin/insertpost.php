<?php session_start();
if(isset($_SESSION['LoginStatus']) and $_SESSION['LoginStatus'] === "200" ){
 require("App/Controller/User.php"); 
    $User = new User();
   $userdata = $_SESSION['userdata'];
        
} else {
  header("Location:".ROOT_PATH."/login");
}

if(isset($_POST["submit"])) {
  
   $PostTitle = $_POST["post_title"];
   $PostDiscription = $_POST["post_discription"];
   $PostAuthor = $_POST["post_author"];
   $PostKeywords = $_POST["post_keyword"];
   $PostCategories = $_POST["post_categories"];
   $PostBody = $_POST["post_body"];
  
   $User->NewPost($PostTitle,$PostDiscription,$PostKeywords,$PostCategories,$PostBody,$PostAuthor);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title> Insert Post</title>
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
.new-post {
  border:4px solid #f1f1f1;
  padding:20px;
}
.new-post .back-button{
  padding:5px;
  border-bottom:4px solid #00bb77;
  margin-bottom:15px;
}
.new-post .back-button a{
  font-family: Raleway, Courier, monospace;
  font-size:20px;
  text-decoration :none;
}
.new-post form{
  display:inline-block;
}
.new-post form label{
  font-size: 20px;
  font-family: Raleway, Courier, monospace;
}
.new-post form input{
  height: 40px ;
  font-size:15px;
  width: 500px;
}
.new-post form button{
  font-size:20px;
  background-color: #00bb77;
  border: 4px solid #f1f1f1;
  color: white;
  font-family: Raleway;
  padding : 5px 10px 5px 10px;
  border-radius: 5px;
}
.new-post form button:hover{
  background-color: #1273e2;
}
#msg{
  font-size : 20px;
  font-family:Raleway;
}
@media (max-width:576px){
  .new-post form input{
  height: 40px ;
  font-size:15px;
  width: 250px;
}
}
</style>
</head>
<body>
<!-- Header -->
<?php
require 'App/View/inc/headerAndNav.php';  
echo "<br>"; ?>

<div class="new-post container">
<div class="back-button"><a href="<?php echo ROOT_PATH; ?>/dashboard/">Back To Dashboard</a></div>
<div id="msg" ></div>
<form action="<?php  $_SERVER["PHP_SELF"]; ?>" onsubmit="return FormValidation()" method="POST" id="insert_form">
   
  <label  for="Title">Post Title :</label>
  <input name="post_title" placeholder="Title" type="text" id="Title" class="form-control"> <br>
  <label  for="post_discription">Post Discription :</label>
  <input name="post_discription" placeholder="Discription" type="text" id="post_discription" class="form-control"> <br>
  <label for="post_author">Author</label>
  <input name="post_author" placeholder="Author Name" type="text" id="post_author" class="form-control"> <br>  
  <label  for="post_body">Post Body :</label>
  <textarea name="post_body" id="post_body" class="form-control" cols="30" rows="10"></textarea> <br>
  <label  for="post_keyword">Keywords :</label>
  <input name="post_keyword" placeholder="Add Keyword Seprated With Commmes" type="text" id="post_keywords" class="form-control"> <br>
  <label for="post_categories">Category :</label> <br>
  <input name="post_categories" placeholder="Add Categories Seprated With Commmes" type="text" id="post_categories" class="form-control"> 
  <br><button type="submit" name="submit">Submit</button>
</form>

</div>

<!-- Footer -->
<?php
echo "<br>";
include 'App/View/inc/footer.php';  ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="./public/inc/Js/home.js"></script>
<script src="App/View/Admin/Js/validation.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>

</body>
</html>
