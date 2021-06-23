<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$gestion=$_POST['gestion'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];


$sql="INSERT INTO movil VALUES('$id','$nombre','$gestion','$telefono','$correocorreo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>