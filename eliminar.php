<?php

 //conexion bbdd

 require "conexion.php";

$correo_borrar = $_POST['correo_eliminar'];
$password_borrar = $_POST['password_eliminar'];

echo $correo_borrar;
echo $password_borrar;

$consul = "DELETE FROM usuarios WHERE correo = '$correo_borrar' and password = '$password_borrar'";


$resultado = mysqli_query($conexion,$consul);

if($resultado){
    header("location:registrar.html");
}else{
    echo"No se pudo borrar el usuario";
    header("location:elimminar.html");
}


?>