<?php
//require('../Files/Constants.php');
$err_or_succ = ' ';
$alertclass= ' ';
$Name = '';
$Email = '';
$Msg = '';
if(isset($_POST['submit'])) {
 
    // Check Data Not Empty
    
     $Msg = htmlentities($_POST['comment']);

if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($Msg)){
    $Name = htmlentities($_POST['name']);
    $Email = htmlentities($_POST['email']);
    $Email = filter_var($Email,FILTER_SANITIZE_EMAIL);
    $Email = trim($Email);
    $Msg = htmlentities($_POST['comment']);

    // Check Valid Email 

 if(filter_var($Email, FILTER_VALIDATE_EMAIL )  === false)
 {
    $err_or_succ = "Please Enter Valide Email";
    $alertclass= 'alert-danger';
 } 
 else {
     $MyEmail = "pardeepsaini7927@gmail.com";
     $subject = "Contact Form Coding Keeda";
     $body = "Name : ".$Name;
     $body .= "\n Email : ".$Email;
     $body .= "\n Message : ".$Msg;
     $headers = "From: ". $Email . "\r\n" ."CC:". $MyEmail;
      $headers .= "MIME-Version : 1.0 "."\r\n ";
      $headers .= "Content-Type:text/html;charset=UTF-8"."\r\n";
    if(mail($MyEmail,$subject,$body,$headers)===false)
    {
        $err_or_succ = "Message Not Send";
        $alertclass= 'alert-danger';
        $Msg =""; 
    } else {
            $err_or_succ = "Congratulation Your Message Is Send";
            $alertclass = 'alert-success';
            $Msg = "";
    }
 }
} else {
    $err_or_succ = "Please Enter Valide Details";
    $alertclass= 'alert-danger';
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <meta name="discription" content="Contact Us Page Email = pardeepsaini7927@gmail.com
 Contact Number = +91 7206281884">
 <link rel="stylesheet" href="http://localhost/blog/public/inc/Css/plugins.min.css">
<link rel="stylesheet" href="http://localhost/blog/public/inc/Css/content.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
 <link rel="stylesheet" href="http://localhost/blog/public/inc/Css/style.css">
 <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
 <title>Contact Us</title>
</head>
<body>
<?php
$path = $_SERVER['DOCUMENT_ROOT'];
require 'inc/headerAndNav.php';  ?>
<br>
<br>
<br>

<div class="container contact-us-form">
<h1 class="display-3">Contact Us</h1>
<?php if($err_or_succ != " ") { ?>
    <p class="alert <?php echo $alertclass; ?>" style="font-size:20px;"><?php  echo $err_or_succ; ?></p>
<?php }; ?>
<form id="cu-form" class="form-group" action="<?php  $_SERVER['PHP_SELF']; ?>" method="post">

<label for="Name"> Name :  </label>
 <br>
<input id="Name" type="text" name="name" value="<?php echo $Name; ?>" placeholder="Name" class="form-control" >
<label for="Email">Email : </label>
<br>
<input id="Email" placeholder="Email" value="<?php echo $Email; ?>" type="text" class="form-control" name="email">
<label for="Comment">Comment : </label>
<br>
<textarea id="comment" name="comment" placeholder="Enter Your Comment" class="form-control" rows="5"></textarea>
<br>
<button name="submit" type="submit" class="btn btn-primary">Submit</button>
<button class="btn btn-primary" type="reset">Reset</button>
</form>  
</div>


<?php
$path = $_SERVER['DOCUMENT_ROOT'];
require('inc\footer.php');  ?>
 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://localhost/blog/public/inc/Js/home.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>

</body>
</html>