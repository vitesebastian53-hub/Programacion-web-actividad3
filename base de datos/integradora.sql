-- Base de datos para el sistema de registro de inventario
-- Actividad Integradora 3 - Sebastian Vite

CREATE DATABASE IF NOT EXISTS integradora
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_spanish_ci;

USE integradora;

CREATE TABLE IF NOT EXISTS productos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  categoria VARCHAR(50) NOT NULL,
  precio DECIMAL(10,2) NOT NULL,
  cantidad INT NOT NULL,
  descripcion VARCHAR(255) DEFAULT NULL,
  fecha_registro DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Datos de ejemplo (opcional, se puede borrar)
INSERT INTO productos (nombre, categoria, precio, cantidad, descripcion) VALUES
  ('Mouse inalambrico', 'Tecnologia', 20.00, 5, 'Mouse optico con receptor USB'),
  ('Teclado mecanico', 'Tecnologia', 35.00, 3, 'Teclado con switches azules');
