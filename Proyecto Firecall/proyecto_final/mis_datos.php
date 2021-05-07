<?php
include_once 'includes/header.php';
/* include_once 'includes/sidebar.php'; */
?>
<div class="row" id="contenido">
    <div class="col-9 jumbotron col-9">

        <form action="actualizar_datos.php" method="post">
           
           

            <?php  if (isset($_SESSION['errores'])):  ?> 

            <div class="alert alert-danger" >        
            <?= mostrarerrores($_SESSION['errores'],'nombre');?>
            </div>

            <?php endif; ?>

            <label for="nombre"> nombre</label>
            <input type="text" name="nombre" placeholder="ingrese su nombre" title="ingrese su nombre" required class="form-control" >

            <?php  if (isset($_SESSION['errores'])):  ?> 

                <div class="alert alert-danger" >        
               <?= mostrarerrores($_SESSION['errores'],'apellido');?>
                 </div>
             
            <?php endif; ?>

            <label for="apellido">apellido</label>
            <input type="text" name="apellido" placeholder="ingrese su apellido" title="ingrese su apellido" required class="form-control">

            <label for="email-regis">@EMAIL</label>
            <input type="email" name="email" placeholder="ingrese su usuario" title="ingrese su usuario" required class="form-control">

            <input type="submit" value="registrar" name="btn_actualizar" class="btn btn-outline-success" >

            
        </form>
        <?php borrarerrores();?>




    </div>

    <?php include_once 'includes/sidebar.php';?>



</div>









