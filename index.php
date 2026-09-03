<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventario · Sebastian Vite</title>
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
      <h2 class="page-title">Sistema de registro de inventario</h2>
      <p class="page-subtitle">
        Aplicacion web con estructura MVC (Modelo - Vista - Controlador) sobre PHP y MySQL.
      </p>

      <div class="acciones-grid">
        <article class="accion-card">
          <h2>Registrar producto</h2>
          <p>Agrega un nuevo producto al inventario mediante un formulario validado.</p>
          <a class="btn" href="/actividad-integradora-3/views/productos/crear.php">Ir al formulario</a>
        </article>
        <article class="accion-card">
          <h2>Ver inventario</h2>
          <p>Consulta todos los productos registrados hasta el momento en la base de datos.</p>
          <a class="btn btn-secundario" href="/actividad-integradora-3/controllers/ProductoController.php?accion=listar">Ver listado</a>
        </article>
      </div>
    </div>
  </main>

  <footer class="site-footer">
    <div class="container">
      Sebastian Vite · 2026
    </div>
  </footer>

</body>
</html>
