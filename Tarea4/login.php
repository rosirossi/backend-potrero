<?php
$usuario= $_POST ["user"];
$contrasenia=$_POST ["pass"];

$ckuser="admin";
$ckpass="1234";

if ($usuario == $ckuser && $contrasenia == $ckpass) {
  header ("location:http://www.potrerodigital.org/");
}
else {
  header ("location:error.html");
}
 ?>
