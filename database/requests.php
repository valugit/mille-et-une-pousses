<?php
// PASSWORD // IMPORTANT
// Admin
$mdpAdmin = "MetPAdmin86";
$mdpUser = "Plantlover";

// Hash PASSWORD for Safety Shit
$hash = password_hash($mdpAdmin, PASSWORD_DEFAULT);

// Verify PASSWORD validity
$check = password_verify($mdpAdmin, $hash);

// DATABASE
// Add Row to Table
// INSERT INTO tablename (column) VALUES value;

// Add Products
$addProduct = "INSERT INTO products (name, price, description, options, maintenance) VALUES ('calathea', '1800', 'Les calathéas sont des plantes très appréciées pour leur feuillage coloré qui lui donne un côté très décoratif.', NULL, 'Elle saura vous séduire par son entretien simple et facile. De l’humidité et votre petite calathéas resplendit ! En ce qui concerne le soleil, notre amie l’apprécie, cependant prenez garde à ne pas l’exposer directement aux rayon de celui-ci.')";

// Update Product
$updateProduct = "UPDATE products SET name = 'Calathéa', price = '1850', description = 'Les calathéas sont des plantes très appréciées pour leur feuillage coloré qui lui donne un côté très décoratif', maintenance = 'Elle saura vous séduire par son entretien simple et facile. De l’humidité et votre petite calathéas resplendit ! En ce qui concerne le soleil, notre amie l’apprécie, cependant prenez garde à ne pas l’exposer directement aux rayon de celui-ci' WHERE products.id = 1";

// Delete Product
$deleteProduct = "DELETE FROM products WHERE products.id = 1";

// Add Categories
$addCategory = "INSERT INTO categories (name) VALUES ('categorie_name')";

// Add Image to Product
$addProductImage = "INSERT INTO product_images (path, alt, sort_order, product_id) SELECT '../database/products/calathea/calathea.jpeg', (SELECT products.name FROM products WHERE products.id = '1'), '1', '1'";

// Add Product to Category
$addProductCategory = "INSERT INTO product_category (product_id, category_id) SELECT '1', (SELECT categories.id FROM categories WHERE categories.name = 'plantes')";

// Delete Product from Category
$deleteProductCategory = "DELETE FROM product_category WHERE product_category.product_id = 1 AND product_category.category_id = (SELECT categories.id FROM categories WHERE categories.name = 'plantes')";

// Add Comment to Product
$addProductComment = "INSERT INTO product_comments (customer_id, product_id, note, comment, created_at) SELECT '2', '1', '5', 'Cette Calathéa est splendide, tout est parfait. Je suis très content de cette acquisition pour mes nouveaux locaux ! \r\nJe recommande chaudement cette plante à quiconque souhaite ajouter de la vie dans son environnement professionnel.', '2019-05-18 13:29:05'";

// Add Roles
$addRole = "INSERT INTO roles (id, name) VALUES (NULL, 'customer')";

// Add Admin
$addAdmin = "INSERT INTO users (id, firstname, lastname, email, password, phone, first_address_id, second_address_id, role_id) VALUES (NULL, 'admin', 'admin', 'gregoire.masse@supinternet.fr', '$2y$10$.88ghb05I2udj4nztM5zy..P5Mm0Vvmup0MZkg6AynhHnwWTgTY5u', NULL, NULL, NULL, '1')";

// Add Customer
$addCust = "INSERT INTO users (id, firstname, lastname, email, password, phone, first_address_id, second_address_id, role_id) VALUES (NULL, 'Jean-Guy', 'Plantlover', 'jean.guy@plantlover.fr', '$2y$10$xsmcv1TTn0S46beYflAYZ.m8IkfGYoD.fk6iCQtugFGEDUm3hPvGu', NULL, NULL, NULL, '2')";

// Delete User
$deleteUser = "DELETE FROM users WHERE users.id = 2";

// Add Country
$addCountry = "INSERT INTO countries (name) VALUES ('France')";

// Add City
$addCity = "INSERT INTO cities (name, country_id) VALUES 'Paris', (SELECT countries.id FROM countries WHERE countries.name = 'France')";

// Add Address
$addAddress = "INSERT INTO addresses (street_number, street_name, building, postal_code, city_id) SELECT '12', 'Rue des champs', NULL, '75001', (SELECT cities.id FROM cities WHERE cities.name = 'Paris')";

// Update User Address
$updateUserAddress = "UPDATE users SET first_address_id = '1' WHERE users.id = 2";

// Update User Phone Number
$updateUserPhone = "UPDATE users SET phone = '0683024071' WHERE users.id = 2";

// Add Blog Article
$addArticle = "INSERT INTO blog_articles (title, content, created_at, author_id, published, image_path, image_alt) SELECT 'Vive les plantes', 'Les plantes, c\'est cool ! Mangez-en', '2019-05-01 17:00:00', '1', '0', '../database/blog/article1.jpeg', 'Plante'";

// Update Article
$updateArticle = "UPDATE blog_articles SET title = 'Vive les plantes !', content = 'Les plantes, c\'est cool ! Entourez-vous en. ;)', image_path = '../database/blog/article1.jpg', image_alt = 'Plante verte' WHERE blog_articles.id = 1";

// Change Article public state
$publishArticle = "UPDATE blog_articles SET published = '1' WHERE blog_articles.id = 1";
$unpublishArticle = "UPDATE blog_articles SET published = '0' WHERE blog_articles.id = 1";

// Add Comment to Article
$addArticleComment = "INSERT INTO article_comments (customer_id, article_id, comment) VALUES ('2', '1', 'C\'est vrai !')";

// Delete Article Comment
$deleteArticleComment = "DELETE FROM product_comments WHERE product_comments.customer_id = 2 AND product_comments.product_id = 1";

// Add Order
$addOrder = "INSERT INTO orders (status, user_id) VALUES ('En préparation', '2')";

// Add Product to Order
$addOrderProduct = "INSERT INTO order_product (order_id, product_id, quantity) VALUES ('1', '1', '12')";
