<?php


include_once 'includes/conexion.php';
if (isset($_POST['guardar'])) {
    $categoria=$_POST['nombre'];

    $quiery="insert into categorias(nombre) values('$categoria')";

    $insert=mysqli_query($conexion,$quiery);
    if ($insert) {

        }
        header("location: index.php");
}