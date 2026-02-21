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

INSERT INTO products (name, description, price, image) VALUES
('Notebook', 'Notebook potente', 3500.00, 'https://via.placeholder.com/300'),
('Mouse Gamer', 'Mouse RGB', 150.00, 'https://via.placeholder.com/300'),
('Teclado Mecânico', 'Teclado Switch Blue', 450.00, 'https://via.placeholder.com/300'),
('Monitor 24"', 'Full HD', 900.00, 'https://via.placeholder.com/300');