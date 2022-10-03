<?php
//echo $_SESSION["username"];

// if(isset($_GET["params"]))        //params here is action 
//     $paramsArray = explode("=", $_GET["params"]);
// session_name("parsmount".$paramsArray[1]);
session_name("parsmount");
//session_id("IDparsmount");
session_start();

$_SESSION = array(); // resetting the superglobal array

if(session_id() !=  " " || isset($_COOKIE[session_name()]))
    setcookie(session_name(), " " , time()-3600, "/");
   
    
session_destroy();
//echo '<script>alert("Session Destroied");</script>';


header("Location: http://localhost/parsmount/signin/");



?>