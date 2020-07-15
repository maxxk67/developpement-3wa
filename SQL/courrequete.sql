-- CREATE DATABASE blog;

-- USE blog;

CREATE TABLE `live-33_blog`.`articles` (
    `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
    `title` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL ,
    `body` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL ,
    `user_id` INT(11) UNSIGNED NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    PRIMARY KEY (`id`)
    ) ENGINE = InnoDB CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci;


INSERT INTO `articles` (`id`, `title`, `body`, `created_at`)
VALUES (NULL, 'mon super titre', 'Let me tell you the approach i used', CURRENT_TIMESTAMP);


-- Creer un champ updated_at, et comparer les dates created_at et updated_at
ALTER TABLE articles ADD COLUMN updated_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP;

-- https://www.w3schools.com/Sql/func_mysql_datediff.asp

SELECT DATEDIFF(created_at, updated_at) AS 'Ecart en jours' FROM articles;

-- SECELCT TIMEDIFF(time1, time2) FROM table;

SELECT TIMEDIFF(created_at, updated_at) AS 'Ecart en temps' FROM articles;


-- creer un table users

-- id INT AUTO INCREMENT PRIMARY KEY
-- nom VARCHAR 255
-- prenom VARCHAR 255
-- email VARCHAR 150
-- password VARCHAR 255
-- created_at TIMESTAMP
-- updated_at TIMESTAMP

CREATE TABLE `live-33_blog`.`users`(
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    nom VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    prenom VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    email VARCHAR(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    password VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id)
) ENGINE = InnoDB CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE `live-33_blog`.`articles`(
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    body TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    author_id INT(11) UNSIGNED NULL,
    FOREIGN KEY (author_id) REFERENCES users(id) ON DELETE SET NULL
) ENGINE = InnoDB CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci;


CREATE TABLE `live-33_blog`.`comments`(
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    comment TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    author_id INT(11) UNSIGNED NULL,
    article_id INT(11) UNSIGNED NULL,
    FOREIGN KEY (author_id) REFERENCES users(id) ON DELETE SET NULL,
    FOREIGN KEY (article) REFERENCES articles(id) ON DELETE CASCADE
) ENGINE = InnoDB CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci;

-- DROP TABLE nom-table;

INSERT INTO users (id, nom, prenom, email, password, created_at, updated_at)
VALUES (NULL, 'Laurent', 'neveux', 'l.neveux@icloud.com', '£12oihqsfidojcapizdùpihQSIJDFBPIJSDG', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);


INSERT INTO `articles` (`id`, `title`, `body`, `user_id`, `created_at`)
VALUES (NULL, 'mon super titre', 'Let me tell you the approach i used', 1, CURRENT_TIMESTAMP);

SELECT CONCAT(nom, ' ', prenom) AS fullname from users WHERE id = 1;


-- La liste des produits (code, nom, échelle et quantité)
-- qui ont une échelle soit de 1:10, soit de 1:18
-- triés par quantité en stock décroissante
-- 4
SELECT productCode, productName, productScale, quantityInStock
FROM products
WHERE productScale = '1:10'
OR productScale = '1:18'
ORDER BY quantityInStock DESC;

-- La liste des produits (code, nom et prix d'achat)
-- des produits achetés au moins 60$ au plus 90$ triés par prix d'achat*
-- 5
SELECT productCode, productName, buyPrice
FROM products
WHERE buyPrice BETWEEN 60 AND 90
ORDER BY buyPrice;


-- La liste des motos (nom, vendeur, quantité et marge)
-- triés par marge décroissante
-- 6
SELECT
    productName,
    productVendor,
    quantityInStock,
    ROUND((MSRP - buyPrice), 2) AS margin
FROM products
WHERE productLine = 'Motorcycles'
ORDER BY margin DESC;


-- La liste des commandes (numéro de commande, date de commande,
-- date d'expédition, écart en jours entre la date de commande
-- et la date d'expédition, statut de la commande)
-- soit qui sont en cours de traitement,
-- soit qui ont été expédiées
-- plus de 10 jours après la date de commande triés par écart décroissant
-- puis par date de commande

-- 7
SELECT
    orderNumber,
    orderDate,
    shippedDate,
    DATEDIFF(shippedDate, orderDate) AS dayGap,
    status
FROM orders
WHERE status = 'In Progress'
OR status = 'Shipped'
OR dayGap > 10
ORDER BY dayGap DESC, orderDate


-- La liste des produits (nom et valeur du stock à la vente) des années 1960
-- 8

SELECT productName, ROUND(MSRP * quantityInStock), 2) AS stockValue
FROM products
WHERE productName LIKE '%196%';

-- Le prix moyen d'un produit vendu
-- par chaque vendeur
-- triés par prix moyen décroissant
-- 9

SELECT ROUND(AVG(MSRP), 2) AS Prix_moyen, productVendor
FROM products
GROUP BY productVendor
ORDER BY Prix_moyen DESC;

-- Le nombre de produits pour chaque ligne de produit
-- 10
SELECT COUNT(productCode), productLine
FROM products
GROUP BY productLine;

-- Le total du stock et le total de la valeur du stock à la vente de chaque ligne de produit
-- pour les produits vendus plus de 100$
-- trié par total de la valeur du stock à la vente
-- 11

SELECT
    ROUND(SUM(quantityInStock), 2) AS totalProductQuantity,
    ROUND(SUM(quantityInStock * MSRP), 2) AS stockValue
FROM products
WHERE MSRP > 100
GROUP BY productLine
ORDER BY stockValue;

-- La quantité du produit le plus en stock de chaque vendeur trié par vendeur
--  12
-- MIN(), MAX()

SELECT MAX(quantityInStock)
FROM products
GROUP BY productVendor
ORDER BY productVendor;

-- Le prix de l'avion qui coûte le moins cher à l'achat
-- 13

SELECT MIN(buyPrice)
FROM products
WHERE productLine LIKE '%Planes%';

-- Le crédit des clients qui ont payé plus de 20000$
-- durant l'année 2004
-- trié par crédit décroissant
-- 14

SELECT
    customers.creditLimit,
    customers.customerNumber,
    SUM(payments.amount) AS totalPayment
FROM customers
JOIN payments
ON customers.customerNumber = payments.customerNumber
WHERE payments.paymentDate LIKE '%2004%'
GROUP BY customers.customerNumber
HAVING totalPayment > 20000
ORDER BY customers.creditLimit DESC;

-- La liste des employés (nom, prénom et fonction)
-- et des bureaux (adresse et ville)
-- dans lequel ils travaillent
-- 15
SELECT
    e.lastName,
    e.firstName,
    e.jobTitle,
    o.addressLine1,
    o.addressLine2,
    o.city
FROM employees AS e
JOIN offices AS o
ON e.officeCode = o.officeCode;



-- La liste des clients français ou américains (nom du client, nom, prénom du contact et pays)
-- et de leur commercial dédié (nom et prénom)
-- triés par nom et prénom du contact
-- 16


SELECT
    c.customerName,
    c.contactLastName,
    c.contactFirstName,
    c.country,
    e.lastName,
    e.firstName
FROM customers AS c
JOIN employees AS e
ON c.salesRepEmployeeNumber = e.employeeNumber
ORDER BY c.contactLastName, c.contactFirstName;




La liste des lignes de commande (numéro de commande, code, nom et ligne de produit)
et la remise appliquée aux voitures ou motos commandées
triées par numéro de commande puis par remise décroissante

--  17
SELECT
    o.orderNumber,
    od.productCode,
    p.productName,
    p.productLine,
    ROUND((p.MSRP - od.priceEach), 2) AS discount
FROM orders AS o
JOIN orderdetails AS od ON o.orderNumber = od.orderNumber
JOIN products AS p ON od.productCode = p.productCode
WHERE productLine IN ('Classic Cars', 'Vintage Cars', 'Motorcycles')
ORDER BY o.orderNumber, discount DESC;

-- Le total des paiements effectués de
-- chaque client (numéro, nom et pays) américain, allemand ou français
-- de plus de 50000$
-- trié par pays puis par total des paiements décroissant

-- 18
SELECT
    ROUND(SUM(p.amount), 2) AS totalPayment,
    c.country,
    c.customerName,
    c.customerNumber
FROM payments AS p
INNER JOIN customers AS c ON p.customerNumber = c.customerNumber
WHERE country IN('France', 'Germany', 'USA')
GROUP BY c.country, c.customerName, c.customerNumber
HAVING totalPayment > 50000
ORDER BY c.country, totalPayment DESC;


-- Le montant total de chaque commande (numéro et date) des clients New-Yorkais (nom)
-- trié par nom du client puis par date de commande

-- 19
SELECT
    o.orderDate,
    o.orderNumber,
    ROUND(SUM(od.quantityOrdered * od.priceEach), 2) as totalPayment,
    c.customerName
FROM orders AS o
JOIN orderdetails AS od ON o.orderNumber = od.orderNumber
JOIN customers AS c ON o.customerNumber = c.customerNumber
WHERE c.city = 'NYC'
GROUP BY o.orderDate, o.orderNumber, c.customerName
ORDER BY c.customerName, o.orderDate;


-- Connection a une base de donnees avec l'objet PDO /
-- https://www.php.net/manual/en/book.pdo.php



-- https://www.php.net/manual/en/pdo.connections.php // Connection
-- $credentials = [

-- ];

-- PHP Data Objects