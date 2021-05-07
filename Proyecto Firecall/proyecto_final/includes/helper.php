<?php

       function mostrarerrores($errores,$campo){
              $alerta="";
                     if (isset($errores[$campo])) {
                     
                     
                     $alerta="<div class='alerta-error'>".$errores[$campo].'</div>';
                     
                     };

              return $alerta;
       };


       function borrarerrores(){
              $_SESSION['errores']=null;

              unset($_SESSION['errores']);
              unset($_SESSION['LOGIN']);
           

       }

       function getcategorias($conexion_nueva){
              include_once 'conexion.php';
              $query="select * from categorias order by id asc";
             $consulta= mysqli_query($conexion_nueva,$query);
              
             $result= array();
              if ($consulta && mysqli_num_rows($consulta)>=1) {
                    // $categorias=mysqli_fetch_assoc($consulta);
              $result=$consulta;


                            return $result;
              }else {
                     return"no trajo nada de la base de datos";
              }

             


       }

       function getentradas($conexion_nueva){

              include_once 'conexion.php';

              $query="SELECT e.*,c.nombre from entradas as e
              INNER JOIN categorias as c 
              ON
              e.categoria_id=c.id ORDER by e.id DESC LIMIT 4";
              //--------------------------------------------------------
              $query_entradas="select e.*,c.nombre from entradas as e".
              "INNER JOIN categorias as c ON".
              "e.categoria_id=c.id ORDER by e.id DESC LIMIT 4 ";

              $consulta=mysqli_query($conexion_nueva,$query);
              
              $datos=array();
              if ($consulta /*&& mysqli_num_rows($consulta>=1)*/) {
                     
                     $datos=$consulta;
                     return $datos;
              }else {
                     return "no funciona";
              }


       }
       
       function get_all_entradas($conexion_nueva){

              include_once 'conexion.php';

              $query="SELECT e.*,c.nombre from entradas as e
              INNER JOIN categorias as c 
              ON
              e.categoria_id=c.id ORDER by e.id DESC";
              //--------------------------------------------------------
              $query_entradas="select e.*,c.nombre from entradas as e".
              "INNER JOIN categorias as c ON".
              "e.categoria_id=c.id ORDER by e.id DESC LIMIT 4 ";

              $consulta=mysqli_query($conexion_nueva,$query);
              
              $datos=array();
              if ($consulta /*&& mysqli_num_rows($consulta>=1)*/) {
                     
                     $datos=$consulta;
                     return $datos;
              }else {
                     return "no funciona";
              }


       }




