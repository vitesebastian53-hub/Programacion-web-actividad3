<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventario · Productos registrados</title>
  <link rel="stylesheet" href="/actividad-integradora-3/css/estilos.css">
</head>
<body>

  <header class="site-header">
    <div class="container">
      <div>
        <h1>Inventario</h1>
        <span class="subtitulo">Sebastian Vite · Registro de productos</span>
      </div>
      <nav class="main-nav" aria-label="Navegacion principal">
        <ul>
          <li><a href="/actividad-integradora-3/index.php">Inicio</a></li>
          <li><a href="/actividad-integradora-3/views/productos/crear.php">Registrar</a></li>
          <li><a href="/actividad-integradora-3/controllers/ProductoController.php?accion=listar">Ver inventario</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <div class="container">
      <h2 class="page-title">Productos registrados</h2>
      <p class="page-subtitle">Listado de todo el inventario almacenado en la base de datos.</p>

      <?php if ($mensaje === "exito"): ?>
        <p class="mensaje-sello mensaje-exito">Producto registrado correctamente</p>
      <?php elseif ($mensaje === "error"): ?>
        <p class="mensaje-sello mensaje-error">No se pudo registrar el producto</p>
      <?php elseif ($mensaje === "invalido"): ?>
        <p class="mensaje-sello mensaje-error">Datos invalidos, intenta de nuevo</p>
      <?php endif; ?>

      <div class="tabla-wrap">
        <?php if (count($productos) > 0): ?>
          <table class="tabla-productos">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Categoria</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Descripcion</th>
                <th>Registrado</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($productos as $producto): ?>
                <tr>
                  <td class="numero"><?php echo htmlspecialchars($producto["id"]); ?></td>
                  <td><?php echo htmlspecialchars($producto["nombre"]); ?></td>
                  <td><?php echo htmlspecialchars($producto["categoria"]); ?></td>
                  <td class="numero">$<?php echo htmlspecialchars(number_format($producto["precio"], 2)); ?></td>
                  <td class="numero"><?php echo htmlspecialchars($producto["cantidad"]); ?></td>
                  <td><?php echo htmlspecialchars($producto["descripcion"] ?? ""); ?></td>
                  <td class="numero"><?php echo htmlspecialchars($producto["fecha_registro"]); ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        <?php else: ?>
          <p class="tabla-vacia">Todavia no hay productos registrados.</p>
        <?php endif; ?>
      </div>

      <p class="acciones-listar">
        <a class="btn" href="/actividad-integradora-3/views/productos/crear.php">Registrar otro producto</a>
      </p>
    </div>
  </main>

  <footer class="site-footer">
    <div class="container">
      Sebastian Vite · 2026
    </div>
  </footer>

</body>
</html>
