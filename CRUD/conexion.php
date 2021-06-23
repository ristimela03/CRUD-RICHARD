<!-- conexion a base de datos -->
<?php
function conectar(){
    $host="localhost";
    $user="root";
    $pass="";
// nombre de la base de datos de conexion
    $bd="tecnologia";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>