CREATE DATABASE ecommerce;
USE ecommerce;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    description TEXT,
    price DECIMAL(10,2),
    image VARCHAR(255)
);

INSERT INTO users (email, password)
VALUES ('admin@email.com', MD5('123456'));

INSERT INTO `products`
(`name`, `description`, `price`, `image`) 
VALUES 
('Controle PS5','Controle Bluetooth','400.00','assets/images/controle-ps5.webp'),
('Cadeira Gamer','Cadeira confortável','800.00','assets/images/cadeira-gamer.jpg'),
('Echo Show','Echo Show Alexa','1200.00','assets/images/echo show 5.webp'),
('Fire tv stick hd','Fire TV stick hd','299.99','assets/images/firestick.webp'),
('Fone Bluetooth','Fone Bluetooth','399.00','assets/images/fone_bluetooth.jpg'),
('Headset','Headset gamer','299.99','assets/images/headset.jpg'),
('Iphone 17 PRO MAX','Iphone 17 PRO MAX','14.000','assets/images/iphone.jpeg'),
('Nitendo Switch','Nitendo Switch','2400.00','assets/images/nitendo-switch.jpg'),
('Microfone','Microfone Gamer','600.00','assets/images/Microfone.jpg'),
('Monitor','Monitor Gamer','899.90','assets/images/monitor.jpeg'),
('Mouse Gamer','Mouse Gamer RGB','199.90','assets/images/mouse gamer.jpeg'),
('Mousepad Gamer','Mousepad Gamer RGB','229.90','assets/images/mousepad.jpeg'),
('Notebook','Notebook i5','3000.00','assets/images/notebook.jpeg'),
('Smart TV','Smart tv 58 4k','2300.00','assets/images/smart-tv.jpg'),
('Smart Watch','Smart Watch preto','669.90','assets/images/smartwatch.jpg'),
('Suporte Articulado','Suporte Articulado ','329.90','assets/images/SuporteArticulado.jpg'),
('Teclado Mecanico','Teclado Mecanico','229.90','assets/images/teclado-mecanico-gamer.jpg'),
('Volante Gamer','Volante Gamer RGB','1459.90','assets/images/volante1.webp'),
('Webcan','webcan RGB','300.00','assets/images/webcan.jpeg')

