<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "ecommerce";



$conn = mysqli_connect($serverName, $dBUsername,$dBPassword, $dBName);

if(!$conn){
   die("Conexion Fallo: " . mysqli_connect_error()); 
}