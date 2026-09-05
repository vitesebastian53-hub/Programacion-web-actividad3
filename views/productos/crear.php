<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrar producto · Inventario</title>
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
      <h2 class="page-title">Registrar nuevo producto</h2>
      <p class="page-subtitle">Completa los datos del producto para agregarlo al inventario.</p>

      <form id="form-producto" class="formulario-registro" action="/actividad-integradora-3/controllers/ProductoController.php?accion=guardar" method="POST" novalidate>

        <div class="campo" id="campo-nombre">
          <label for="nombre">Nombre del producto</label>
          <input type="text" id="nombre" name="nombre" placeholder="Ej. Mouse inalambrico" maxlength="100">
          <span class="campo-error" id="error-nombre"></span>
        </div>

        <div class="campo" id="campo-categoria">
          <label for="categoria">Categoria</label>
          <select id="categoria" name="categoria">
            <option value="">Selecciona una categoria</option>
            <option value="Tecnologia">Tecnologia</option>
            <option value="Oficina">Oficina</option>
            <option value="Hogar">Hogar</option>
            <option value="Ropa">Ropa</option>
            <option value="Alimentos">Alimentos</option>
            <option value="Otros">Otros</option>
          </select>
          <span class="campo-error" id="error-categoria"></span>
        </div>

        <div class="campo" id="campo-precio">
          <label for="precio">Precio (USD)</label>
          <input type="text" id="precio" name="precio" placeholder="Ej. 20.00">
          <span class="campo-error" id="error-precio"></span>
        </div>

        <div class="campo" id="campo-cantidad">
          <label for="cantidad">Cantidad</label>
          <input type="text" id="cantidad" name="cantidad" placeholder="Ej. 5">
          <span class="campo-error" id="error-cantidad"></span>
        </div>

        <div class="campo" id="campo-descripcion">
          <label for="descripcion">Descripcion (opcional)</label>
          <textarea id="descripcion" name="descripcion" placeholder="Detalles adicionales del producto" maxlength="255"></textarea>
          <span class="campo-error" id="error-descripcion"></span>
        </div>

        <button type="submit" class="btn">Guardar producto</button>
      </form>
    </div>
  </main>

  <footer class="site-footer">
    <div class="container">
      Sebastian Vite · 2026
    </div>
  </footer>

  <script src="/actividad-integradora-3/js/script.js"></script>
</body>
</html>
