<?php

$contraseña='Passw0rd';
echo $contraseña;
echo '<br>';
$salt='zakl05p';

$contraseña=md5($contraseña).$salt;

echo $contraseña;




?>