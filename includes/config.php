<?php
define("SERVER",'localhost');
define("USERNAME",'root');
define("PASSWORD",'');
define("DATABASE",'mismora_farm');

$connect=mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
if ($connect==true){
    //echo 'Connected';
    // header('Location:../index.php');
}else{
    echo 'Error: Not connected'.mysqli_connect_error();
}
