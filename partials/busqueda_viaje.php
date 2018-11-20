<?php
session_start();

require 'conexion-database.php';

mysqli_select_db(conn, 'juliet');

$con_busqueda_origen = "SELECT * FROM ciudad_origen ";

$req = mysqli_query($conn, $con_busqueda_origen);

while ($row = mysqli_fetch_array($req)) {
    echo "<option value='".$row['id_ciudad_origen']."' ";
    if($_POST['ciudad_origen']==$row['id_ciudad_origen'])
    echo "SELECTED";
    echo ">";
    echo $row['nombre_ciudad_origen'];
    echo '</option>';
}