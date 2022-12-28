<?php

 //conexion bbdd

 require "conexion.php";
 
//editar datos

$nombre_edt = $_POST['nombre_editar'];
$apellido_edt = $_POST['apellido_editar'];
$correo_edt = $_POST['correo_editar'];
$dni_edt = $_POST['dni_editar'];
$password_edt = $_POST['password_editar'];

//datos viejos del correo y password

$password_old = $_POST['password_actual'];
$correo_old = $_POST['correo_actual'];

//consulta de query

$consul = "UPDATE usuarios SET correo = '$nombre_edt', apellido = '$apellido_edt', correo = '$correo_edt', dni = '$dni_edt', password = '$password_edt' WHERE correo = '$correo_old'";
$resultado = mysqli_query($conexion,$consul);

// 

if($resultado){
    header("location:entrar.html");
}else{
    
    header("location:editar.html");
}














?>