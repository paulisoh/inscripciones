<?php
include ("../Config/config.php"):
include ("usuario.php")
$p= new usuario
$dp= mysquli_fetch_object($p-> ageOne(s, GET["id"]) );

$date=new date_time_set($dp->fecha);

If (isset($_POST) && !empty($_POST))[
  $_POST "imagen"] = $dp-> imagen;
  if ($_FILES["imagen"]["name"] !==""){
    $_POST["imagen"] = saveImage($_FILES);
  }
  $update =$p -> $update ($_POST);
  if ($update)[
    $mensaje= <div> class= "alert alert-succes" role="alert" > Registro modificado con éxito </div>];
    else
    $mensaje= <div> class= "alert alert-danger" role="alert" > Error </div>
    
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
            <h2 class="text-center mb-2" > Modificar sesión </h2>
            <form method="POST" enctype="multipart/form-data" >

            <div class="row mb-2" >
              <div class="col" >
                <input type="text" name="nombres" id="nombre" placeholder="Nombres del usuario" class="form-control"
                value="<?=$dp->nombres ?>"/>
                <input type="hidden" name="id"value="<?=$dp->id?>"/>
             </div>
              <div class="col" >
                <input type="text" name="apellido" id="apellidos" placeholder="Apellidos del usuario"class="form-control" 
                value="<?=$dp->apellidos?>"/>
              </div>
            </div>

            <div class="row mb-2">
              <div class="col">
                <input type="email" name="email"id="email" placeholder="Email del usuario" class="form-control"
                value="<?=$dp->email ?>"/>
            </div>
            <div class="col">
                <input type="number" name="celular" id="celular"placeholder="Celular del usuario" class="form-control"
                value="<?=$dp->celular ?>"/>
            </div>
           </div>
             
                    <div class="col">
                <input type="datetime-local" name="edad" id="fecha"placeholder="fecha del usuario" 
                class="form-control" 
                value="<?=$date->format("Y,m,d/Th:i") ?>"/>
            </div>

            
                <input type="file" name="imagen" id="imagen"
                class="form-control"/>
              
            </div>
        </div>
        <buttonn class="btn btn-success"> Modificar </button>
        <form>
    </body>
</html>