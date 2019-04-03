<?php

require_once('../src/equipo.php');
require_once('../public/assets/navSup.php');

$consulta = new Equipo();
$consulta->conectar();  
$resultado = $consulta->listaEquipos();  

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="./css/nba.css">
</head>
<body>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<table>
  <tr>
    <td><b>Nombre</b></td>
    <td><b>Ciudad</b></td>
    <td><b>Conferencia</b></td>
    <td><b>Division</b></td>
  </tr>

<?php
  foreach ($resultado as $arrayEquipo) {
    echo "<tr>";
    echo "<td>".$arrayEquipo['Nombre']."</td>";
    echo "<td>".$arrayEquipo['Ciudad']."</td>";
    echo "<td>".$arrayEquipo['Conferencia']."</td>";
    echo "<td>".$arrayEquipo['Division']."</td>";
    echo "</tr>";
  }

?>



</body>
</html>

