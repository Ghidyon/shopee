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

    // Get data from wishlist table in the database
    $wishlist_data = $product->getData('wishlist');

    // include wishlist area
    // if wishlist is not empty, include _wishlist.php, else include empty_wishlist.php
    count($wishlist_data) ? require_once('includes/_wishlist.php') : require_once('includes/empty_wishlist.php');

    // include new-phone area
    require_once('includes/_new-phone.php');

    // include footer area
    require_once('includes/footer.php');
?>

