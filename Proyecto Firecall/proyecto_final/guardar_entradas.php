<?php
include_once 'includes/conexion.php';
if (!session_status()) {
    session_start();
}

if (isset($_POST['guardar'])) {
   $titulo=$_POST['titulo'];
   $descripcion=$_POST['descripcion'];
   $categoria=$_POST['categoria'];
   $id=$_SESSION['user_id'];


    
     /* echo $titulo."-".$categoria."-".$id."\n";
    die();  */
   $quiery="insert into entradas(titulo,descripcion,usuario_id,categoria_id,fecha) values ('$titulo','$descripcion',$id,$categoria,CURDATE());";

     $insert=mysqli_query($conexion,$quiery);
    if ($insert) {

        echo "bregoo";
     
        }else {
            echo "no funciono";

            /* var_dump(mysqli_error($conexion)); */

            
        }

        header("location: index.php"); 
}









?>