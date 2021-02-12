<?php
    // Request method POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Once delete button is clicked, return item_id
        if ( isset($_POST['delete_item']) ) {
            // Call method to delete cart item using item_id
            $delete_item = $cart->deleteItem($_POST['item_id']);
        }

        // Once save for later button is clicked, return item_id
        if ( isset($_POST['save_item']) ) {
            // Call method to save item in the wishlist
            $save_item = $cart->saveForLater($_POST['item_id']);
        }
    }
?>

<!-- Cart -->
<section id="cart">
    <div class="container pt-2 pb-5">
        <h4 class="font-baloo font-size-20">Wishlist</h4>

        <!-- Wishlist -->
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
                                <?php // Once delete button is clicked, get item_id of that item ?>
                                <form method="post">
                                    <input type="hidden" name="item_id" value="<?= $item['item_id'] ?? 0; ?>">
                                    <button type="submit" name="delete_item" class="btn font-baloo text-danger border-end rounded-0 pe-3 ps-0">Delete</button>
                                </form>
                                <form method="post">
                                    <?php // Once save for later button is clicked, get item_id of that item ?>
                                    <input type="hidden" name="item_id" value="<?= $item['item_id'] ?? 0; ?>">
                                    <button type="submit" name="save_item" class="btn font-baloo text-danger px-3">Save for Later</button>
                                </form>
                            </div>
                            <!-- Product Quantity Ends -->
                        </div>

                        <!-- Product Price -->
                        <div class="col-sm-2">
                            <div class="font-baloo font-size-20 text-danger text-end">
                                $<span class="product-price" data-id="<?= $item['item_id']; ?>"><?= $item['item_price'] ?? 0; ?></span>
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

        </div>
        <!-- Wishlist Ends -->
    </div>

</section>
<!-- Cart Ends -->