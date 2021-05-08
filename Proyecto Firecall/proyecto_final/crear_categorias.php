<?php
include_once 'includes/conexion.php';
include_once 'includes/header.php';
if (!isset($_SESSION['login'])) {
    header(" location: index.php");
}
?>
<div class="container-fluid">
    <div class="row">

        <div class="col-9 jumbotron" >
            <h1>crear categorias</h1>

            <form action="guardar_categorias.php" method="post">
            <div class="form-group">


                <label for="titulo">ingresa el nombre de la categoria</label><br>
                <input type="text" name="nombre" placeholder="ingrese la aqui" required  class="form-control"><br>
                
               
                <button class="btn btn-primary"  type="submit" value="guardar" name="guardar">guardar</button>

             
            </div>



            </form>

        </div>

        <div  class="alertas-botones col-3">

            <?php include_once 'includes/sidebar.php';?>

        </div>

    </div>

    <?php #esta es el footer
            require_once 'includes/footer.php'
        ?>







</div>