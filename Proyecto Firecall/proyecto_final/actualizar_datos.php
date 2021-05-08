<?php
include_once 'includes/conexion.php';
if (isset($_POST['"btn_actualizar"'])) {
    
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $email=$_POST['email'];
    $id=$_SESSION['user_id'];
   

    $errores= array();
    //validacion de nombre
    if (!is_numeric($nombre) && !preg_match("/[0-9]/",$nombre)) {
    
     $nombre_validado=true;
     
    }else
    {
        $errores['actualizar-nombre']="el nombre invalido";
        $nombre_validado=false;
    }

    //validacion de apellido 
    if (!is_numeric($apellido) && !preg_match("/[0-9]/",$apellido)) {
       
        $apellido_validado=true;
    }else {
        $errores['actualizar-apellido']="el apellido es invalido";
        $apellido_validado=false;
    }

    

        //AQUI AGO LA INSERCION DE USUARIOS
    if (count($errores)==0) {
         $quiery="update usuarios set nombre='$nombre', apellido='$apellido', email='$email' where id=$id";
         $insert=mysqli_query($conexion,$quiery);

            if ($insert) {
               $_SESSION['LOGIN-actualizar']= "se a registrado  corectamente";
               header('location:  index.php');
        }else {
            $_SESSION['LOGIN-actualizar']= "no se a podido registrar";
               header('location:  index.php');
        }


    }else {
    $_SESSION['errores']=$errores;
    header('location:  actualizar_datos.php');
    }


}











?>