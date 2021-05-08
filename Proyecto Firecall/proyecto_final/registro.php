<?php
include_once 'includes/conexion.php';
    if (isset($_POST['btn_registrar'])) {
        
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        $errores= array();
        //validacion de nombre
        if (!is_numeric($nombre) && !preg_match("/[0-9]/",$nombre)) {
        
         $nombre_validado=true;
         
        }else
        {
            $errores['nombre']="el nombre invalido";
            $nombre_validado=false;
        }

        //validacion de apellido 
        if (!is_numeric($apellido) && !preg_match("/[0-9]/",$apellido)) {
           
            $apellido_validado=true;
        }else {
            $errores['apellido']="el apellido es invalido";
            $apellido_validado=false;
        }

        

            //AQUI AGO LA INSERCION DE USUARIOS
        if (count($errores)==0) {
             $quiery="insert into usuarios (nombre,apellido,email,password,fecha) values('$nombre','$apellido','$email','$password','CURDATE()'); ";
             $insert=mysqli_query($conexion,$quiery);

                if ($insert) {
                   $_SESSION['LOGIN']= "se a registrado  corectamente";
                   header('location:  index.php');
            }else {
                $_SESSION['LOGIN']= "no se a podido registrar";
                   header('location:  index.php');
            }


        }else {
        $_SESSION['errores']=$errores;
        header('location:  index.php');
        }


    }







?>