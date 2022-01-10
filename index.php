<?php
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/Category.php";
require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/Cart.php";

$luigi = new User('Luigi', 26);
$product = new Product("1", 'Gigabyte Nvidia gForce 3090ti', 2000, 'description goes here...');
$category = new Category('GPU');
$cart = new Cart();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
</head>

<body>
    <p><span>Nome Utente: </span><?php echo $luigi->get_name() ?></p>
    <p><span>ID Prodotto: </span><?php echo $product->get_id() ?></p>
    <p><span>Nome Prodotto: </span><?php echo $product->get_name() ?></p>
    <p><span>Nome Categoria: </span><?php echo $category->get_name() ?></p>
    <p><span>Nome Prodotto ereditato in Categoria: </span><?php echo $category->get_product_name() ?></p>
    <p><span>Inserimento in cart: </span><?php echo $cart->add_product($product->get_id()) ?></p>
</body>

</html>