<?php
session_start();
require("App/Controller/User.php");
$errmsg = '';
$errclass = '';
if(isset($_SESSION['LoginStatus']) and $_SESSION['LoginStatus'] === "200" ) {
    session_destroy();
}
if(isset($_POST['submit'])) {
   $password = $_POST['password'];
   $username = $_POST['username'];
    if(!empty($password) and !empty($username)) {
         $userlogin = new User();
         $loginstatus = $userlogin->Login($username,$password);
         if($loginstatus === 200)
          {
            $_SESSION['LoginStatus'] = "200";
            header("Location:".ROOT_PATH."/dashboard/");
            exit;
          } else {
            $errmsg = "Pls Enter Correct Username Or Password";
          }
    }
    else {
       $errmsg = "Pls Enter Correct Username Or Password";     
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Log In </title>
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
.form-admin label{
   font-size:20px;
   font-family:Raleway,Arial;
   margin-bottom:5px;
}

h1{
    margin-bottom:10px;
}

.form-admin input{
    font-size: 15px;
    font-family:Raleway,Arial;
    margin-bottom:5px;
    width : 80%;
    height:40px;
}

.form-admin button{
    font-size:20px;
    margin-top:6px;
}
.msg {
    margin : 10px 10px 10px 30px;
    font-size: 15px;
    font-family:Raleway,Arial;
}
</style>
</head>
<body>
<!-- Header -->
<?php
require 'App/View/inc/headerAndNav.php';  
echo "<br>";
 ?>

 <h1 class="container display-3">Admin Login</h1>
 <?php if($errmsg != "") : ?>
  <div class="msg alert alert-danger">
  <?php echo $errmsg; ?>
  </div>
<?php endif; ?>
 <form class="container form-admin" method="POST" name="form-admin" action=<?php $_SERVER['PHP_SELF']; ?> >
  
 <label for="Username">Username</label>
 <input class="form-control" type="text" name="username"  id="Username" placeholder="UserName">
 <label for="Password">Password</label>
 <input type="password" name="password" id="Password" class="form-control"  placeholder="Password" >
 <button class="btn btn-primary" type="submit" name="submit">Login</button>
 </form>


<!-- Footer -->
<?php
echo "<br>";
include 'App/View/inc/footer.php';  ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="public/inc/Js/home.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
    
</body>
</html>