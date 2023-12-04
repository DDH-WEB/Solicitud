<?php
$cnn=mysqli_connect("localhost","root","") or die('error en servidor');
mysqli_select_db($cnn,"bd_prestamos") or die("error en conexion de base");
?>