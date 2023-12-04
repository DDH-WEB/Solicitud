<?php
include('../conexion/conexion.php');

$opcion=$_GET['opcion'];

if ($opcion=="registrar_soli") {

    $dni=$_GET['dni'];
    $nom=$_GET['nom'];
    $ape=$_GET['ape'];
    $tel=$_GET['tel'];
    $ema=$_GET['ema'];
    $tip=$_GET['tip'];
    $mon=$_GET['mon'];
    $zon=$_GET['zon'];
    $msg=$_GET['msg'];

    $con="INSERT INTO temporal_soli VALUES(0,'$dni','$nom','$ape','$tel','$ema','RECIBIDO','$tip','$msg',' ',$mon)";
    mysqli_query($cnn,$con)or die("fallo consulta registrar");
    echo "registro de solicitud correcto";
}
?>