<?php

// DBConnection Object -- create database connection
$db = new DBConnection();

// Product Object
$product = new Product($db);

// Fetch product data
$product_array = $product->getData();

// Cart Object
$cart = new Cart($db);