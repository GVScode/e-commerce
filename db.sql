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
('Controle PS5','Controle Bluetooth','400.00','assets/images/controle-ps5.webp')
('Cadeira Gamer','Cadeira confortável','800.00','assets/images/cadeira-gamer.jpg')
('Echo Show','Echo Show Alexa','1200.00','assets/images/echo show 5.webp'),
('Fire tv stick hd','Fire TV stick hd','299.99','assets/images/firestick.webp'),
('Fone Bluetooth','Fone Bluetooth','399.00','assets/images/fone_bluetooth.jpg'),
('Headset','Headset gamer','299.99','assets/images/headset.jpg'),
('Iphone 17 PRO MAX','Iphone 17 PRO MAX','14.000','assets/images/iphone.jpeg'),
('Nitendo Switch','Nitendo Switch','2400.00','assets/images/nitendo-switch.jpg'))

