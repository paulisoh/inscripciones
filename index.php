<?php

include('config/config.php');
getFolderProyect()

  
?>

!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscripciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
      <nav class="navbar navbar-expand navbar-dark bg-dark mb-5">
      <ul class='navbar-nav'>
        <li class= "nav-item">
          <a class= "nav-link" href="#"> ver inscripciones </a>
        </li>
        <li class="nav-item" >
          <a class="nav-link" href="#" > Registrar sesión</a>
          </li>
        <li class="nav-item" >
          <a class="nav-link" href="<?=ROOT?>/inscripciones/add.php" > Registrar sesion </a>
          </li>
       </ul>
       </nav>
       <div class="container">
        <h1 class="text-center" > inscripciones </h1>
</divclass="row">

<while $pt="mysqli_fetch_oject($data)">
</while>
date=$pt->fecha;
echo"<div class= "col">;
echo "<div>";
echo "<h5> img scr=""=".ROOT."/images/"$pt->imagen" width="50" height="50" /$pt-> nombres $pt->></div>.</h5>;
echo "<p> <b> fecha:</b> ".date("D", strtotime/$date) </p>";


echo "<div>;

    </body>
</html>
<?php
