<?php

class Equipo{

  private $conexion=null;
  private $nombre;
  private $ciudad;
  private $conferencia;
  private $division;
  private $post=array();


  function __construct()
  {
  }
    
  public function conectar(){
    $this->conexion = new mysqli("localhost", "root", "", "nba");
    if ($this->conexion->connect_errno) {
      echo "Fallo al conectar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
    }else{
      //echo "listo<br>";
    }
  }

  public function comprobarCampos($post){

    if(!isset($post)||!isset($post["Nombre"])||!isset($post["Ciudad"])||!isset($post["Conferencia"])||!isset($post["Division"])){

      $error="";

    }elseif($post["Nombre"] =""){
      echo "No se ha introducido el nombre";
    }elseif ($post["Ciudad"] ="") {
      echo "No se ha introducido la ciudad";
    }elseif($post["Conferencia"] =""){
      echo "No se ha introducido la conferencia";
    }elseif($post["Division"] =""){
      echo "No se ha introducido la division";

    }else{   
      $error=false;
      $this->nombre=$_POST['Nombre'];
      $this->ciudad=$_POST['Ciudad'];
      $this->conferencia=$_POST['Conferencia'];
      $this->division=$_POST['Division'];
      return $error;
    }

  }

  public function insertarEquipo(){
      
    $sql = "INSERT INTO `equipos` (`Nombre`, `Ciudad`, `Conferencia`, `Division`) VALUES ('$this->nombre', '$this->ciudad', '$this->conferencia', '$this->division')";
    if($this->conexion->query($sql)){

    }else{
      //  echo "error";
    }
  }

  public function listaEquipos(){
    $consulta="SELECT * from `equipos`";
    $resultado = $this->conexion->query($consulta);
    return $resultado;
  }

}