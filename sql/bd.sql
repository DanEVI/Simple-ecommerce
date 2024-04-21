CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    imagen_url VARCHAR(255) NOT NULL,
    descripcion TEXT NOT NULL,
    caracteristicas TEXT
);

INSERT INTO productos (nombre, precio, imagen_url, descripcion, caracteristicas) VALUES
('Televisor LED 50 pulgadas', 599.99, 'https://www.google.com/images/televisor1.jpg', 'Televisor LED de alta definición con tecnología avanzada de pantalla.', 'Resolución: Full HD, Tamaño de pantalla: 50 pulgadas, Tecnología de pantalla: LED'),
('Laptop HP Pavilion', 899.99, 'https://www.google.com/images/laptop1.jpg', 'Laptop HP Pavilion con procesador Intel Core i5 y pantalla táctil de 15 pulgadas.', 'Procesador: Intel Core i5, Memoria RAM: 8GB, Almacenamiento: 256GB SSD, Pantalla: 15 pulgadas táctil'),
('Samsung Galaxy S21', 999.99, 'https://www.google.com/images/celular1.jpg', 'Samsung Galaxy S21 con cámara de alta resolución y pantalla AMOLED de 6.2 pulgadas.', 'Pantalla: 6.2 pulgadas AMOLED, Cámara: Triple cámara trasera de 64MP, Almacenamiento: 128GB, RAM: 8GB'),
('Sony WH-1000XM4', 349.99, 'https://www.google.com/images/audifonos1.jpg', 'Audífonos inalámbricos Sony WH-1000XM4 con cancelación de ruido y alta calidad de audio.', 'Cancelación de ruido: Sí, Duración de la batería: Hasta 30 horas, Conectividad: Bluetooth 5.0'),
('Televisor OLED 55 pulgadas', 1299.99, 'https://www.google.com/images/televisor2.jpg', 'Televisor OLED de alta gama con colores vibrantes y contraste excepcional.', 'Resolución: 4K UHD, Tamaño de pantalla: 55 pulgadas, Tecnología de pantalla: OLED'),
('Laptop Apple MacBook Air', 1199.99, 'https://www.google.com/images/laptop2.jpg', 'Laptop Apple MacBook Air con procesador M1 y diseño ultradelgado.', 'Procesador: Apple M1, Memoria RAM: 8GB, Almacenamiento: 256GB SSD, Pantalla: Retina de 13 pulgadas'),
('iPhone 13 Pro', 1099.99, 'https://www.google.com/images/celular2.jpg', 'iPhone 13 Pro con pantalla Super Retina XDR y sistema de cámara Pro.', 'Pantalla: 6.1 pulgadas Super Retina XDR, Cámara: Triple cámara trasera de 12MP, Almacenamiento: Hasta 1TB'),
('Bose QuietComfort 45', 299.99, 'https://www.google.com/images/audifonos2.jpg', 'Audífonos inalámbricos Bose QuietComfort 45 con cancelación de ruido y hasta 24 horas de batería.', 'Cancelación de ruido: Sí, Duración de la batería: Hasta 24 horas, Conectividad: Bluetooth 5.1'),
('Televisor QLED 65 pulgadas', 1799.99, 'https://www.google.com/images/televisor3.jpg', 'Televisor QLED con tecnología Quantum Dot y modo de juego automático.', 'Resolución: 4K UHD, Tamaño de pantalla: 65 pulgadas, Tecnología de pantalla: QLED'),
('Laptop Dell XPS 13', 1299.99, 'https://www.google.com/images/laptop3.jpg', 'Laptop Dell XPS 13 con pantalla InfinityEdge y procesador Intel Core i7.', 'Procesador: Intel Core i7, Memoria RAM: 16GB, Almacenamiento: 512GB SSD, Pantalla: InfinityEdge de 13.4 pulgadas'),
('Google Pixel 6', 699.99, 'https://www.google.com/images/celular3.jpg', 'Google Pixel 6 con cámara de doble píxel y sistema operativo Android 12.', 'Pantalla: 6.4 pulgadas AMOLED, Cámara: Dual píxel de 50MP, Almacenamiento: 128GB, RAM: 8GB'),
('JBL Tune 750BTNC', 129.99, 'https://www.google.com/images/audifonos3.jpg', 'Audífonos Bluetooth JBL Tune 750BTNC con cancelación de ruido y hasta 15 horas de reproducción.', 'Cancelación de ruido: Sí, Duración de la batería: Hasta 15 horas');

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    apellido VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    contra VARCHAR(12) NOT NULL,
);