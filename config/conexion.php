<?php
// config/conexion.php
// Archivo independiente para la conexion a la base de datos MySQL.

$host = "localhost";
$usuario = "root";
$clave = "";
$baseDatos = "integradora";

$conexion = mysqli_connect($host, $usuario, $clave, $baseDatos);

if (!$conexion) {
  die("Error de conexion a la base de datos: " . mysqli_connect_error());
}

mysqli_set_charset($conexion, "utf8mb4");
