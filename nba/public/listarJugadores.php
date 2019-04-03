<?php

require_once('../src/Jugador.php');
require_once('../public/assets/navSup.php');

$consulta = new Jugador();
$consulta->conectar();  
$resultado = $consulta->listarJugadores();  

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>
  

<link rel="stylesheet" href="./css/nba.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<table>
  <tr>
    <td><b>Codigo</b></td>
    <td><b>Nombre</b></td>
    <td><b>Procedencia</b></td>
    <td><b>Altura</b></td>
    <td><b>Peso</b></td>
    <td><b>Posicion</b></td>
    <td><b>Nombre Equipo</b></td>
  </tr>

<?php
  foreach ($resultado as $arrayJugador) {
    echo "<tr>";
    echo "<td>".$arrayJugador['codigo']."</td>";
    echo "<td>".$arrayJugador['Nombre']."</td>";
    echo "<td>".$arrayJugador['Procedencia']."</td>";
    echo "<td>".$arrayJugador['Altura']."</td>";
    echo "<td>".$arrayJugador['Peso']."</td>";
    echo "<td>".$arrayJugador['Posicion']."</td>";
    echo "<td>".$arrayJugador['Nombre_equipo']."</td>";
    echo "</tr>";
  }

?>




</body>
</html>