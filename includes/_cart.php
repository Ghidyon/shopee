<?php

    // Request method POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Once delete button is clicked, return item_id
        if ( isset($_POST['delete_item']) ) {
            // Call method to delete cart item using item_id
            $delete_item = $cart->deleteItem($_POST['item_id']);
        }
    }
?>

<!-- Cart -->
<section id="cart">
    <div class="container py-5">
        <h4 class="font-baloo font-size-20">Shopping Cart</h4>

        <!-- Cart Items & Subtotal-->
        <div class="row">

            <!-- Cart Items -->
            <div class="col-sm-9">
                <?php
                    // Get data from cart table in the database
                    $cart_data = $product->getData('cart');

                    // loop through cart_data to get item_id(s)
                    foreach ($cart_data as $item) :
                        // Use item_id to get product_data from the product table in the database
                        $product_data = $product->getProduct($item['item_id']);

                        // Since product_data is a multi-dimensional array, Map through product array and display item
                        // Map through product array and get store prices of items in an array
                        $item_prices[] = array_map(function($item) {                    
                ?>
                    <!-- Cart Product -->
                    <div class="row border-top py-3 mt-3">
                        <div class="col-sm-2">
                            <img src="<?= $item['item_image'] ?? './assets/products/1.png'; ?>" style="height:120px" alt="Product<?= $cart_data['cart_id'] ?? 'Unknown'; ?>" class="img-fluid">
                        </div>
                        <div class="col-sm-8">
                            <h5 class="font-baloo font-size-20"><?= $item['item_name'] ?? 'Unknown'; ?></h5>
                            <small>by <?= $item['item_brand'] ?? 'Unknown'; ?></small>

                            <!-- Product Rating -->
                            <div class="d-flex">
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <a href="" class="px-2 font-size-14 font-raleway text-decoration-none">20534 ratings</a>
                            </div>
                            <!-- Product Rating Ends -->

                            <!-- Product Quantity -->
                            <div class="qty d-flex pt-2">
                                <div class="d-flex font-raleway w-25">
                                    <button class="qty-down border bg-light rounded-start" data-id="product1">
                                        <i class="fas fa-angle-down"></i>
                                    </button>
                                    <input type="text" class="qty-input border px-2 text-center w-100 bg-light" value="1" disabled data-id="product1">
                                    <button class="qty-up border bg-light rounded-end" data-id="product1">
                                        <i class="fas fa-angle-up"></i>
                                    </button>
                                </div>
                                <?php // Once delete button is clicked, get item_id of that item ?>
                                <form method="post">
                                    <input type="hidden" name="item_id" value="<?= $item['item_id'] ?? 0; ?>">
                                    <button type="submit" name="delete_item" class="btn font-baloo text-danger border-end rounded-0 px-3">Delete</button>
                                </form>
                                <button type="submit" class="btn font-baloo text-danger px-3">Save for Later</button>
                            </div>
                            <!-- Product Quantity Ends -->
                        </div>

                        <!-- Product Price -->
                        <div class="col-sm-2">
                            <div class="font-baloo font-size-20 text-danger text-end">
                                $<span><?= $item['item_price'] ?? 0; ?></span>
                            </div>
                        </div>
                        <!-- Product Price Ends -->

                    </div>
                    <!-- Cart Product Ends -->
                <?php
                    return $item['item_price'];
                    }, $product_data); // closing part of array mapping function
                    endforeach;
                ?>
            </div>
            <!-- Cart Items Ends -->

            <!-- Subtotal -->
            <div class="col-sm-3">
                <div class="sub-total text-center border mt-3">
                    <h6 class="font-size-12 font-raleway text-success pt-2"><i class="fas fa-check"></i> Your order is eligible for FREE delivery</h6>
                    <div class="border-top py-4">
                        <h5 class="font-size-20 font-baloo">
                            Total: <?= count($item_prices); // get the number of items in the cart ?> item(s) => 
                            <span class="text-danger">$</span><span class="text-danger"><?= $cart->getSum($item_prices) ?? 0; ?></span>
                        </h5>
                        <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
                    </div>
                </div>
            </div>
            <!-- Subtotal Ends -->

        </div>
        <!-- Cart Items & Subtotal Ends -->
    </div>

</section>
<!-- Cart Ends -->