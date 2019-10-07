<?php
require('App/App.php');
 $Req = $_SERVER['REQUEST_URI'];
//echo $Req;
if(!empty($Req))
{ 
    $dreq = $Req;
    $Req =strtolower($Req);
    $response = new App($Req);
    if($Req === "/"){
        $response->DefPage($dreq);
    }
    else{
    $response->GetResponse();
    }
}
?>