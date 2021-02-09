<?php
require_once('../app.php');

// Request method POST
if (isset($_POST['itemid'])) {
    // Get product from product table in database and return to index.js file
    $result = $product->getProduct($_POST['itemid']);
    echo json_encode($result);
}