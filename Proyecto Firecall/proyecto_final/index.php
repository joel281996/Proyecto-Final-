<?php 
#esta esa la cabezera#
include_once 'includes/header.php';

include_once 'includes/conexion.php';
require_once 'includes/helper.php';
if (!session_status()) {
    session_start();
 } 
?>
<body>
        

    <div class="container-fluid">
            <div class="row">
                
            <div class="col-9 jumbotron" >

                            <h1>ultimas entradas</h1><br>
                        
                        <?php $consulta=getentradas($conexion);
                            
                       /*  var_dump(mysqli_fetch_assoc($consulta)); */
                        ?>
                        
                        <?php while ($entradas=mysqli_fetch_assoc($consulta)):?>
                        <article>
                                <h2 class="text-primary"><?=$entradas['titulo']?></h2>
                                <span class="text-secondary"><?=$entradas['nombre']."/".$entradas['fecha'] ;?></span>

                                    <p>
                                        <?=$entradas['descripcion']?>
                                    </p>

                                
                         </article>
                        
                        <?php endwhile;?>

                </div>
                
            <?php
                        #esto es el sidebar#
                        require_once 'includes/sidebar.php'; 
            ?>

            
            </div>
        </div>

        <div >
        <a href="ver_mas.php" class="btn-primary btn-sm" id="ver" >ver mas</a>   
        </div>

        <?php #esta es el footer
            require_once 'includes/footer.php'
        ?>


    </div>



    
</body>
</html>