<?php
session_start();
unset($_SESSION['users']);
setcookie(session_name(),'',time()-7000000,'/');
session_destroy();
header("Location:signin.php");
?>