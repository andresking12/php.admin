<?php
include("conexion.php");


$id=$_POST['id'];
$titulo=$_POST['titulo'];
$precio=$_POST['precio'];
$descripcion=$_POST['descripcion'];
$habitaciones=$_POST['habitaciones'];
$estacionamiento=$_POST['estacionamiento'];


$sql="INSERT INTO alumno VALUES('$id','$titulo','$precio','$descripcion','$habitaciones','$estacionamiento')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location:index.php");
    
}else {
}
?>