<?php
    ob_start(); // to bypass default reload page action whenever there is a form submission

    // include app.php
    require_once('app.php');

    // include header area
    require_once('includes/header.php');

    // Get data from cart table in the database
    $cart_data = $product->getData('cart');
    
    // include cart area
    // if cart is not empty, include _cart.php, else include empty_cart.php
    count($cart_data) ? require_once('includes/_cart.php') : require_once('includes/empty_cart.php');

    // include wishlist area
    require_once('includes/_wishlist.php');

    // include new-phone area
    require_once('includes/_new-phone.php');

    // include footer area
    require_once('includes/footer.php');
?>

