<?php
$host="localhost";
$user="root";
$password="1122";
$db="cinemasteru";
$conexion=mysqli_connect($host,$user,$password,$db) or die("no se ha podido connectar...");
 mysqli_set_charset( $conexion, 'utf8');
?>