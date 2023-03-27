CREATE DATABASE ecommerce;

USE ecommerce;

CREATE TABLE usuarios (
  id_usuario INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(50) NOT NULL,
  contrasena VARCHAR(100) NOT NULL,
  telefono VARCHAR(20) NOT NULL,
  correo VARCHAR(50) NOT NULL,
  direccion VARCHAR(100) NOT NULL,
  PRIMARY KEY (id_usuario)
);

CREATE TABLE productos (
  id_producto INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(50) NOT NULL,
  precio DECIMAL(10,2) NOT NULL,
  descripcion TEXT,
  stock INT NOT NULL DEFAULT 0,
  PRIMARY KEY (id_producto)
);

CREATE TABLE orden_carrito (
  id_orden INT NOT NULL AUTO_INCREMENT,
  id_usuario INT NOT NULL,
  id_producto INT NOT NULL,
  cantidad INT NOT NULL,
  PRIMARY KEY (id_orden),
  INDEX (id_usuario),
  INDEX (id_producto),
  FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
    ON DELETE CASCADE,
  FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
    ON DELETE CASCADE
);

CREATE TABLE pedidos (
  id_pedido INT NOT NULL AUTO_INCREMENT,
  id_usuario INT NOT NULL,
  fecha DATE NOT NULL,
  tipo_pago VARCHAR(20) NOT NULL,
  estado VARCHAR(20) NOT NULL DEFAULT 'PENDIENTE',
  valor_total DECIMAL(10,2) NOT NULL DEFAULT 0,
  PRIMARY KEY (id_pedido),
  INDEX (id_usuario),
  FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
    ON DELETE CASCADE
);

CREATE TABLE detalle_orden (
  id_pedido INT NOT NULL,
  id_producto INT NOT NULL,
  cantidad INT NOT NULL,
  PRIMARY KEY (id_pedido, id_producto),
  INDEX (id_pedido),
  INDEX (id_producto),
  FOREIGN KEY (id_pedido) REFERENCES pedidos(id_pedido)
    ON DELETE CASCADE,
  FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
    ON DELETE CASCADE
);

CREATE TABLE reservaciones (
  id_reservacion INT NOT NULL AUTO_INCREMENT,
  id_usuario INT NOT NULL,
  nropersonas INT NOT NULL,
  fecha DATE NOT NULL,
  hora TIME NOT NULL,
  mensaje TEXT,
  PRIMARY KEY (id_reservacion),
  INDEX (id_usuario),
  FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
    ON DELETE CASCADE
);
