<?php
// models/Producto.php
// Modelo: responsable de comunicarse con MySQL. No conoce HTML ni el formulario.

class Producto {

  // Inserta un nuevo producto en la base de datos.
  public static function insertar($conexion, $nombre, $categoria, $precio, $cantidad, $descripcion) {
    $sql = "INSERT INTO productos (nombre, categoria, precio, cantidad, descripcion)
            VALUES (?, ?, ?, ?, ?)";

    $consulta = mysqli_prepare($conexion, $sql);

    if (!$consulta) {
      return false;
    }

    mysqli_stmt_bind_param($consulta, "ssdis", $nombre, $categoria, $precio, $cantidad, $descripcion);
    $resultado = mysqli_stmt_execute($consulta);
    mysqli_stmt_close($consulta);

    return $resultado;
  }

  // Devuelve todos los productos registrados, del mas reciente al mas antiguo.
  public static function obtenerTodos($conexion) {
    $productos = [];
    $sql = "SELECT id, nombre, categoria, precio, cantidad, descripcion, fecha_registro
            FROM productos
            ORDER BY id DESC";

    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
      while ($fila = mysqli_fetch_assoc($resultado)) {
        $productos[] = $fila;
      }
    }

    return $productos;
  }
}
