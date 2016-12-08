<?php
session_start();
$conex = false;

if( isset($_POST["name"]) && !empty($_POST["name"]) && isset($_POST["passw"]) && !empty($_POST["passw"]) ) {
    if ( $_POST["name"]  === "userfriend" &&  $_POST["passw"]  === "123456") {
        $conex = true;
    }
}

$_SESSION["conexion"] = $conex;
header('location:pages/products.php');


?>
