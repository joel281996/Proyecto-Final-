<?php
include_once "includes/conexion.php";
include_once 'includes/header.php';
if (!isset($_SESSION['login'])) {
    header(" location: index.php");
}
?>
<div class="container-fluid">
    <div class="row">

        <div class="col-9 jumbotron" >
            <h1>crear entradas</h1>

            <form action="guardar_entradas.php" method="post">
            <div class="form-grup">

            <label for="nombre"> ingrese el titulo de la entrada</label><br>
            <input type="text" name="titulo" placeholder="ingrese el titulo aqui" required  class="form-control"><br>

            <label for="titulo">DESCRIPCION</label><br>
            <input type="text" name="descripcion" placeholder="ingrese la descripcion" required  class="form-control"><br>

            <select name="categoria" id="" required>
                <?php $categorias=getcategorias($conexion);

                    if (!empty($categorias)) {
                        echo "no trajo nada";
                    }
                 while($categoria=mysqli_fetch_assoc($categorias)):
                 
                 ?> 

                <option value="<?=$categoria['id']?>"> 
                
                <?=$categoria['nombre']?>
            
                </option>

               

                <?php endwhile;?>
                </select><br><br>


            </form>


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








