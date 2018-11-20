<?php
session_start();

require 'conexion-database.php';

mysqli_select_db(conn, 'juliet');

$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];


$s = "SELECT  * FROM usuario WHERE correo_usuario = '$correo' && contraseña_usuario = '$contraseña'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);


if($num == 1) {
    $_SESSION['username'] = $correo;
    header('location: ../vistas/home.php');
}else {
    header('location: ../vistas/login.php');
}