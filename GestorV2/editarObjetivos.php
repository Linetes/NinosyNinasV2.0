<?php
session_start();
require_once("modelo.php");

if(isset($_SESSION["usuario"]) && $_SESSION["rol"] == "R01") {
    $user = $_SESSION["usuario"];
    $nombre = $_SESSION["nombre"];
    $rol = $_SESSION["rol"];
    $funciones = $_SESSION["funciones"];
    $view = "about_us";
  modificarObjetivos($_POST["idInfo"],$_POST["input"]);
  echo obtenerTabla2('Objetivos');
  //header("location: about_us.php");
} else {
    $_SESSION["error"] = "Usuario y/o contraseña incorrectos";
    header("location: index.php");
}
?>
