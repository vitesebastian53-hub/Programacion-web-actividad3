// ============================================================
// Inventario Sebastian Vite — js/script.js
// Validaciones del formulario de registro antes de enviarlo.
// ============================================================

const formulario = document.getElementById("form-producto");

// Solo se ejecuta esta logica si el formulario existe en la pagina actual
// (por ejemplo, no existe en la vista de listado).
if (formulario) {

  const campoNombre = document.getElementById("nombre");
  const campoCategoria = document.getElementById("categoria");
  const campoPrecio = document.getElementById("precio");
  const campoCantidad = document.getElementById("cantidad");
  const campoDescripcion = document.getElementById("descripcion");

  // ---------- Funcion: mostrar un error en un campo especifico ----------
  function mostrarError(idCampo, idError, mensaje) {
    const contenedor = document.getElementById(idCampo);
    const textoError = document.getElementById(idError);

    contenedor.classList.add("con-error");
    textoError.textContent = mensaje;
  }

  // ---------- Funcion: limpiar el error de un campo especifico ----------
  function limpiarError(idCampo, idError) {
    const contenedor = document.getElementById(idCampo);
    const textoError = document.getElementById(idError);

    contenedor.classList.remove("con-error");
    textoError.textContent = "";
  }

  // ---------- Funcion: validar todos los campos del formulario ----------
  function validarFormulario() {
    let formularioValido = true;

    const nombre = campoNombre.value.trim();
    const categoria = campoCategoria.value;
    const precio = campoPrecio.value.trim();
    const cantidad = campoCantidad.value.trim();
    const descripcion = campoDescripcion.value.trim();

    // Nombre: campo vacio y longitud minima
    if (nombre === "") {
      mostrarError("campo-nombre", "error-nombre", "El nombre es obligatorio.");
      formularioValido = false;
    } else if (nombre.length < 3) {
      mostrarError("campo-nombre", "error-nombre", "El nombre debe tener al menos 3 caracteres.");
      formularioValido = false;
    } else {
      limpiarError("campo-nombre", "error-nombre");
    }

    // Categoria: campo vacio
    if (categoria === "") {
      mostrarError("campo-categoria", "error-categoria", "Selecciona una categoria.");
      formularioValido = false;
    } else {
      limpiarError("campo-categoria", "error-categoria");
    }

    // Precio: campo vacio, numerico y valor correcto (mayor a 0)
    if (precio === "") {
      mostrarError("campo-precio", "error-precio", "El precio es obligatorio.");
      formularioValido = false;
    } else if (isNaN(precio) || Number(precio) <= 0) {
      mostrarError("campo-precio", "error-precio", "Ingresa un precio numerico valido, mayor a 0.");
      formularioValido = false;
    } else {
      limpiarError("campo-precio", "error-precio");
    }

    // Cantidad: campo vacio, numerico entero y valor correcto (no negativo)
    if (cantidad === "") {
      mostrarError("campo-cantidad", "error-cantidad", "La cantidad es obligatoria.");
      formularioValido = false;
    } else if (!Number.isInteger(Number(cantidad)) || Number(cantidad) < 0) {
      mostrarError("campo-cantidad", "error-cantidad", "Ingresa una cantidad entera valida, 0 o mayor.");
      formularioValido = false;
    } else {
      limpiarError("campo-cantidad", "error-cantidad");
    }

    // Descripcion: opcional, pero si se escribe algo se valida su longitud
    if (descripcion.length > 255) {
      mostrarError("campo-descripcion", "error-descripcion", "La descripcion no puede superar 255 caracteres.");
      formularioValido = false;
    } else {
      limpiarError("campo-descripcion", "error-descripcion");
    }

    return formularioValido;
  }

  // Evento 1: submit del formulario, valida antes de dejarlo enviar al controlador
  formulario.addEventListener("submit", function (evento) {
    const esValido = validarFormulario();

    if (!esValido) {
      evento.preventDefault();
    }
  });

  // Evento 2: input en cada campo, para limpiar el error apenas el usuario corrige
  const campos = [campoNombre, campoCategoria, campoPrecio, campoCantidad, campoDescripcion];

  campos.forEach(function (campo) {
    campo.addEventListener("input", function () {
      validarFormulario();
    });
  });
}
