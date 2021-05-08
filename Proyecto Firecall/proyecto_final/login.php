<?php
include_once 'includes/conexion.php';

if (isset($_POST['btn_login'])) {
    if (isset($_SESSION['login-error'])) {
        unset($_SESSION['login-error']);
    }

    $email=trim($_POST['email']);
    $password=$_POST['password'];

    $quiery="select * from usuarios where email='$email' and password='$password'";
     $consulta=mysqli_query($conexion,$quiery);
     

    if ($consulta) {
        
        $usuario=mysqli_fetch_assoc($consulta);
        $_SESSION['user_id']=$usuario['id'];
        
       $_SESSION['login']=$usuario['nombre'];
       
    }else {
        $_SESSION['login-error']="usuario y/o contraseña son invalidos";
    }

    header('location: index.php');
}
?>
