🛒 E-Commerce PHP
📌 Sobre o Projeto

Este projeto consiste no desenvolvimento de uma aplicação web de E-commerce completo, construída com PHP, MySQL, HTML e CSS, com o objetivo de simular um ambiente real de loja virtual.

A aplicação contempla autenticação de usuário, exibição dinâmica de produtos, carrinho de compras com controle de sessão e cálculo automático do valor total da compra.

🚀 Funcionalidades

✅ Sistema de Login

✅ Controle de Sessão

✅ Exibição de Produtos em Carrossel

✅ Produtos organizados em Grade (Cards)

✅ Carrinho de Compras

✅ Cálculo automático de subtotal e total

✅ Remoção de itens do carrinho

✅ Checkout simulando finalização de compra

🏗️ Arquitetura do Projeto
ecommerce/
│
├── index.php
├── login.php
├── logout.php
├── cart.php
├── checkout.php
├── add_to_cart.php
├── remove_from_cart.php
├── config.php
├── db.sql
└── assets/
      └── style.css
🛠️ Tecnologias Utilizadas

PHP 8

MySQL

XAMPP

HTML5

CSS3

Session Control

🗄️ Estrutura do Banco de Dados
Banco: ecommerce
Tabelas:
🔹 users
Campo	Tipo
id	INT (PK)
email	VARCHAR(100)
password	VARCHAR(255)
🔹 products
Campo	Tipo
id	INT (PK)
name	VARCHAR(100)
description	TEXT
price	DECIMAL(10,2)
image	VARCHAR(255)
⚙️ Como Executar o Projeto
1️⃣ Clonar o repositório
git clone https://github.com/seuusuario/ecommerce.git
2️⃣ Mover para o XAMPP

Colocar a pasta dentro de:

C:\xampp\htdocs\
3️⃣ Criar o Banco

Acessar:

http://localhost/phpmyadmin

Criar o banco ecommerce e executar o script db.sql.

4️⃣ Iniciar Servidor

No XAMPP:

Start Apache

Start MySQL

Acessar:

http://localhost/ecommerce
🔐 Usuário Padrão para Teste

Email:

admin@email.com

Senha:

123456
🧠 Lógica do Carrinho

O carrinho utiliza $_SESSION para armazenar os produtos selecionados.

Cálculo do total:
$subtotal = $product['price'] * $qty;
$total += $subtotal;
🔒 Melhorias Futuras

Implementação de password_hash() para maior segurança

Uso de PDO com Prepared Statements

Sistema de pedidos (orders)

Integração com gateway de pagamento

Painel administrativo

Implementação de arquitetura MVC

Responsividade mobile

📈 Objetivo Acadêmico

Este projeto foi desenvolvido com fins educacionais, visando consolidar conhecimentos em:

Conexão PHP + MySQL

Manipulação de Sessões

CRUD básico

Organização de projeto web

Estruturação de banco de dados

Lógica de negócios aplicada ao carrinho de compras

👨‍💻 Autor

Guilherme Varjão Santos
Desenvolvedor em formação


