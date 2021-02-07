<?php
    ob_start(); // to bypass default reload page action whenever there is a form submission

    // include app.php
    require_once('app.php');

    // include header area
    require_once('includes/header.php');

    // include cart area
    require_once('includes/_cart.php');

    // include new-phone area
    require_once('includes/_new-phone.php');

    // include footer area
    require_once('includes/footer.php');
?>

