<?php
$server= 'localhost';
$user= 'root';
$password='';
$data_base='street_market';

$conexion= mysqli_connect($server,$user,$password,$data_base);

if (!$conexion) {
    die("Conexion fallida");
}
?>