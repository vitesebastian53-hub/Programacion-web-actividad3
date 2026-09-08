<?php
// controllers/ProductoController.php
// Controlador: recibe las acciones del usuario y coordina Modelo <-> Vista.

require_once __DIR__ . "/../config/conexion.php";
require_once __DIR__ . "/../models/Producto.php";

$accion = isset($_GET["accion"]) ? $_GET["accion"] : "listar";

// ---------- Accion: guardar un nuevo producto ----------
if ($accion === "guardar" && $_SERVER["REQUEST_METHOD"] === "POST") {

  $nombre = trim($_POST["nombre"] ?? "");
  $categoria = trim($_POST["categoria"] ?? "");
  $precio = $_POST["precio"] ?? "";
  $cantidad = $_POST["cantidad"] ?? "";
  $descripcion = trim($_POST["descripcion"] ?? "");

  // Validacion basica del lado del servidor (ademas de la validacion en JavaScript)
  $camposValidos = true;

  if ($nombre === "" || $categoria === "" || $precio === "" || $cantidad === "") {
    $camposValidos = false;
  }

  if (!is_numeric($precio) || floatval($precio) < 0) {
    $camposValidos = false;
  }

  if (!ctype_digit(strval($cantidad)) || intval($cantidad) < 0) {
    $camposValidos = false;
  }

  if ($camposValidos) {
    $insertado = Producto::insertar($conexion, $nombre, $categoria, floatval($precio), intval($cantidad), $descripcion);
    $mensaje = $insertado ? "exito" : "error";
  } else {
    $mensaje = "invalido";
  }

  header("Location: ProductoController.php?accion=listar&mensaje=" . $mensaje);
  exit;
}

// ---------- Accion: listar productos (por defecto) ----------
$productos = Producto::obtenerTodos($conexion);
$mensaje = $_GET["mensaje"] ?? null;

require __DIR__ . "/../views/productos/listar.php";
