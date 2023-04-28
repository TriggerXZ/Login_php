<?php
$server= 'localhost';
$user= 'root';
$password='';
$data_base='street_market';

$conn= mysqli_connect($server,$user,$password,$data_base);

if (!$conn) {
    die("Conexion fallida");
}
?>