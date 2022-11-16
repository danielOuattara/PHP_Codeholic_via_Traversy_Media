<?php 

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=php_codeholic_products_app', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
