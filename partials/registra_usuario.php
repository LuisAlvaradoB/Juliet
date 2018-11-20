<?php
session_start();
header('location: ../vistas/login.php');

require 'conexion-database.php';

mysqli_select_db(conn, 'juliet');

$nombre = $_POST['nombre'];
$apellido_paterno = $_POST['apellido_paterno'];
$apellido_materno = $_POST['apellido_materno'];
$run = $_POST['run'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$provincia = $_POST['provincia'];

$s = "SELECT  * FROM usuario WHERE nombre_usuario = ''$name";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);

if($num == 1) {
    echo 'el nombre ya existe';
}else {
    $reg="INSERT INTO usuario(nombre_usuario, apellido_pat_usuario, apellido_mat_usuario, run_usuario,
    correo_usuario, contraseña_usuario, direccion_usuario, ciudad_usuario, provincia_usuario ) 
    VALUES('$nombre', '$apellido_paterno', '$apellido_materno', '$run', '$correo', '$contraseña', 
    '$direccion', '$ciudad', '$provincia')";

    mysqli_query($conn, $reg);
    echo 'Registro existoso';
}