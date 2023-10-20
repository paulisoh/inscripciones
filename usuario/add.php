<?php
  include('../config/config.php');
  include('usuario.php');

  if ( isset ($_POST) && !empty ($_POST)) {
    $C = new Cliente();

    if ($_FILES ['imagen'] ['name'] !==''){

    }

    save = $c->save($_POST);
    if ($save){
      $mensaje = '<div class= "alert alert-success" > Sesion Registrada </div>';
    }else{
      $mensaje = '<div class= "alert alert-danger" > Error al registrar! </div>';
    }
  }


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UFT-8" />
        <title> Registrar sesión</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container" >
          <?php
          if(isset($mensaje)){
            echo $mensaje;
          }
          ?>
            <h2 class="text-center mb-2" > Registrar sesión </h2>
            <form method="POST" enctype="multipart/form-data" >

            <div class="row mb-2" >
              <div class="col" >
                <input type="text" name="nombres" id="nombre" placeholder="Nombres del usuario" class="form-control"/>
           </div>
              <div class="col" >
                <input type="text" name="apellido" id="apellidos" placeholder="Apellidos del usuario"class="form-control" />
              </div>
            </div>

            <div class="row mb-2">
              <div class="col">
                <input type="email" name="email"id="email" placeholder="Email del usuario" class="form-control"/>
            </div>
            <div class="col">
                <input type="number" name="celular" id="celular"placeholder="Celular del usuario" class="form-control" />
            </div>
           </div>
             
                    <div class="col">
                <input type="datetime-local" name="edad" id="fecha"placeholder="fecha del usuario" 
                class="form-control" />
            </div>

            
                <input type="file" name="imagen" id="imagen"
                class="form-control" />
            </div>
        </div>
        <buttonn class="btn btn-success"> Registrar </button>
        <form>
    </body>
</html>