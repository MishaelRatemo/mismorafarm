<?php
session_start();

//clear/reset session
$_SESSION=array();

//delete session
session_destroy();


//redirect
header('Location:../index1.php');

exit;