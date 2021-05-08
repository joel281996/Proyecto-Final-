<?php include_once  'conexion.php';
require_once 'login.php';
require_once 'helper.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="otrostyle.css">
    <link rel="stylesheet" href="bootstrap.css">
    
</head>
<body>


    <div class="row" id="logo">
        
           <a href="indexbootstrap.php">Grupo Firecall</a>

     </div>

        <div class="row">
            <div class="col-12">

                        <nav class="navbar navbar-expand-sm bg-dark navbar-dark" id="menu">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                    <a class="nav-link" href="index.php">inicio</a>
                    <?php

                    $resultado=(getcategorias($conexion));
                    ?>

                    <?php while ($categorias=mysqli_fetch_assoc($resultado)):?>
                        
                        
                        <li class="nav-item">
                        <a class="nav-link" href="categoria.php?id=<?=$categorias['id']?>"><?=$categorias['nombre']?></a>
                        </li>

                    <?php endwhile;?>
                        
                    
                    <li class="nav-item">
                    <a class="nav-link " href="#">about</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">contac</a>
                    </li>
                   
                </ul>
                </nav>

            </div>
        </div>