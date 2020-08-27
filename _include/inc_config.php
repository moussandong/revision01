<?php
const MODE_PROD=false;
session_start();
$link = mysqli_connect("localhost", "root", "", "baseagence");
mysqli_set_charset($link , 'utf8');
$nomApplication = "Base agence";
$menu=array(
    
); 

require "inc_fonction.php";
?>