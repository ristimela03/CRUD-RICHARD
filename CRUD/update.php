<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$gestion=$_POST['gestion'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];

$sql="UPDATE movil SET  nombre='$nombre',gestion='$gestion',telefono='$telefono',correo='$correo' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>