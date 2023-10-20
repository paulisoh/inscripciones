<?php
  include_once('../config/config.php');
  include('Cliente.php');

  $C = new Cliente();
  $data = $C->getAll();

  if (isset ($_GET["ID"]) && !empty($_GET["id"])){
    $remove $p -> delete ($_GET["id"])
    if ($remove){
      header ("location:"".ROOT.*/usuario/index.php")}
      else{
        $mensaje ="<div class="alert alert-danger" role="alert"> Error al eliminar</div>";
      }
      
    }
  

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UFT-8" />
        <title> Entregas </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class= "container">
          <h2 class= "text-center mb-2"> Registro </h2>
          <div class= "row">
            <?php
              while($pt = mysqli_fetch_object($data) ) {
                $date = $pt->fecha;
                echo "<div class='col'>";
                  echo "<div class='border border-info p-2'>";
                    echo"<h5> <img src=' ".ROOT."/images/$pt->imagen' width='50' height='50' /> $pt->nombre$pt->apellido </h5>";
                    echo "<p> <b>Fecha:</p>". date('D',strtotime ($date) )." ".date('M-Y H:i',strtotime ($date))."</p>";
                  echo "</div class='text center'>";
                  echo "<a class = btn btn - succes" href=".ROOT." /usuario/edit.php?id=$pt->id > Modificar </a> - <a class= "btn - danger"
                   href= "".ROOT."/usuario/index.php?id=$pt -> id" > Eliminar </a>;
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";

              }
            ?>
          </div>
        </div>
    </body>
</html>