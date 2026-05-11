# Sistema de Gestión de Inventario — Ferretería Bayron
**RUC:** 20614052903

---

## ¿De qué trata esto?

Ferretería Bayron lleva tiempo manejando su inventario de forma manual, lo que ha generado algunos dolores de cabeza: productos malos que se mezclan con los buenos, artículos que se acaban sin que nadie se dé cuenta, y otros que llevan meses acumulando polvo en el almacén. Este sistema nació para resolver exactamente eso.

---

## Descripción del negocio

Ferretería Bayron es un negocio dedicado a la venta de productos ferreteros. Como cualquier ferretería, maneja un volumen considerable de productos distintos, y mantener ese inventario ordenado es clave para que todo funcione bien día a día.

---

## El problema y la solución

El mayor problema hasta ahora ha sido la falta de control sobre el inventario. No había forma clara de saber qué productos estaban en mal estado, cuáles se estaban acabando o cuáles simplemente tenían demasiado stock sin moverse.

La solución es un sistema que le da visibilidad a todo eso, sin complicaciones.

---

## Antes de arrancar — Preanálisis

### ¿Qué necesita la ferretería?

- Saber qué productos están defectuosos para no venderlos por error
- Recibir avisos cuando algo está por agotarse
- Identificar qué productos tienen demasiado stock y no rotan

### ¿Es viable hacerlo?

Sí. La información necesaria ya existe dentro del negocio; solo falta un sistema que la organice y la haga visible de forma práctica.

### ¿Hasta dónde llega el sistema?

El sistema cubre únicamente la gestión interna del inventario de Ferretería Bayron. No incluye ventas, facturación ni manejo de proveedores (al menos por ahora).

---

## Análisis

### Qué debe hacer el sistema

#### Requisitos funcionales

| # | Qué hace | Descripción |
|---|----------|-------------|
| RF01 | Control de productos defectuosos | Permite marcar un producto como defectuoso y apartarlo del inventario disponible para la venta. También lleva un registro de cuántos productos se pierden así y por qué. |
| RF02 | Avisos de stock bajo | Alerta cuando la cantidad de un producto cae por debajo de un mínimo definido previamente, para hacer el pedido a tiempo y evitar quedarse sin ese artículo. |
| RF03 | Control de exceso de inventario | Muestra qué productos llevan mucho tiempo sin moverse o cuya cantidad supera lo que normalmente se vende, para poder tomar decisiones al respecto. |

#### Requisitos no funcionales

| # | Condición | Descripción |
|---|-----------|-------------|
| RNF01 | Facilidad de uso | Tiene que ser simple de manejar, sin necesidad de conocimientos técnicos. |
| RNF02 | Rapidez | Debe responder sin demoras que interrumpan el trabajo del día a día. |
| RNF03 | Seguridad | La información debe estar protegida y solo accesible para el personal autorizado. |
| RNF04 | Estabilidad | No debe fallar en momentos críticos como cierres de día o toma de inventarios. |

### Análisis de los requisitos

Cada uno de los tres problemas identificados tiene un impacto directo en la operación:

- Los productos defectuosos generan pérdidas y pueden dañar la confianza del cliente si llegan a venderse.
- La falta de avisos de stock bajo provoca quiebres que hacen perder ventas.
- El exceso de inventario amarra capital que podría usarse mejor, y ocupa espacio de almacén innecesariamente.

Los tres casos se pueden resolver con un sistema de seguimiento en tiempo real que registre movimientos, calcule cantidades disponibles y emita alertas automáticas cuando algo sale de los rangos normales.

## Base de datos
```sql
CREATE DATABASE ferre_bayron;
USE ferre_bayron;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    usuario VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    rol VARCHAR(30) NOT NULL
);

CREATE TABLE proveedores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    telefono VARCHAR(20),
    direccion VARCHAR(150)
);

CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL,
    fecha_registro DATETIME DEFAULT CURRENT_TIMESTAMP
);

	CREATE TABLE compras (
    id INT AUTO_INCREMENT PRIMARY KEY,
    proveedor_id INT,
    fecha_compra DATETIME DEFAULT CURRENT_TIMESTAMP,
    total DECIMAL(10,2),

    FOREIGN KEY (proveedor_id)
    REFERENCES proveedores(id)
);

CREATE TABLE detalle_compras (
    id INT AUTO_INCREMENT PRIMARY KEY,
    compra_id INT,
    producto_id INT,
    cantidad INT NOT NULL,
    precio_unitario DECIMAL(10,2),
    
    FOREIGN KEY (compra_id)
    REFERENCES compras(id),

    FOREIGN KEY (producto_id)
    REFERENCES productos(id)
);

CREATE TABLE recibidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    compra_id INT,
    fecha_recibido DATETIME DEFAULT CURRENT_TIMESTAMP,
    estado VARCHAR(30),

    FOREIGN KEY (compra_id)
    REFERENCES compras(id)
);

CREATE TABLE devoluciones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    producto_id INT,
    motivo TEXT,
    cantidad INT,
    fecha_devolucion DATETIME DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (producto_id)
    REFERENCES productos(id)
);

INSERT INTO usuarios(nombre,usuario,password,rol)
VALUES ('Administrador','admin','123456','Administrador');

INSERT INTO proveedores(nombre,telefono,direccion)
VALUES ('Proveedor Central','999999999','Pucallpa');

INSERT INTO productos(nombre,descripcion,precio,stock)
VALUES ('Martillo','Herramienta de golpe',25.00,50);
```
