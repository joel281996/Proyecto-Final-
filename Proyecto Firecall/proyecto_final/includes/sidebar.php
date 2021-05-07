<?php include_once 'helper.php';   ?>
<?php include_once 'header.php';   ?>

<?php if (!session_status()) {
            session_start();
        } 
include_once 'registro.php';
        ?>
<div class="col-" id="sidebar">



    <div class="form-group  col-12" > 
    
    <?php if(isset($_SESSION['login'])):?>
        <div class="alert alert-success" class="alertas">
            <?="bienvenido"." ". $_SESSION['login'];?>
        </div>

            <div  class="alertas-botones">
            
                <a href="mis_datos.php" class="btn-primary btn-sm" >  mis datos</a><br><br>

                <a href="crear_categorias.php"   class="btn-warning btn-sm">crear categorias</a><br><br>
        
                <a href="crear_entradas.php"   class="btn-warning btn-sm">crear entradas</a><br><br>

                <a href="logout.php" class="btn-danger btn-sm">  cerrar cesion</a>
            </div>


    <?php endif ?>

    <?php if(isset($_SESSION['login-error'])):?>
        <?=$_SESSION['login-error'];?>
        
    <?php endif ?>


    <?php if(!isset($_SESSION['login'])):?>
        <div class="form-group  col-12" > 
        <h3>identificate</h3>
        
        <form action="login.php" method="post">

            <label for="email">@EMAIL</label>
            <input type="email" name="email" placeholder="ingrese su usuario" title="ingrese su usuario" required class="form-control" >

            <label for="password">PASSWORD</label>
            <input type="text" name="password" placeholder="ingrese contraseña" title="ingrese su contraseña" class="form-control"> 

            <input type="submit" value="login" name="btn_login"  class="btn btn-outline-success">

         

        </form>

    </div>
    <hr>
    <div class="form-group col-12"  id="sidebar">
      
        
    

        <h3>registrate</h3>

       

        <?php if(isset($_SESSION['LOGIN'])):?>
                <div class="alert alert-success">
                    <?= $_SESSION['LOGIN'];?>
                </div>

            <?php endif ?>

    
        <form action="registro.php" method="post">
           
           

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

            <label for="password-regis">PASSWORD</label>
            <input type="text" name="password" placeholder="ingrese contraseña" title="ingrese su contraseña"  required class="form-control"> 

            <input type="submit" value="registrar" name="btn_registrar" class="btn btn-outline-success" >

            
        </form>
        <?php borrarerrores();?>
    </div>
            <?php endif?>
</div>