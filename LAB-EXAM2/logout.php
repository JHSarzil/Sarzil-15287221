<?php

setcookie("id","",time()-3600,"/");
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: login.php"); // Redirecting To Home Page
}
?>