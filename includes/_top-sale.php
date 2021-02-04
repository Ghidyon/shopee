<?php

// include app.php file containing all important constants and MySQL scripts
// require_once('./app.php');

// Fetch product data
$product_array = $product->getData();

// Randomize order of items in product array
shuffle($product_array);
?>

<!-- Top Sale -->
<section id="top-sale">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Top Sale</h4>
        <hr>

        <!-- Owl Carousel -->
        <div class="owl-carousel owl-theme">
            <!-- Loop through product data array and display individual product -->
            <?php foreach ( $product_array as $item ) : ?>
            <div class="item py-2">
                <div class="product font-raleway">
                    <a href="#"><img src="<?= $item['item_image'] ?? './assets/products/1.png'; ?>" class="img-fluid" alt="<?= $item['item_brand'] ?? 'Unknown'; ?> product"></a>
                    <div class="text-center">
                        <h6><?= $item['item_name'] ?? 'Unknown'; ?></h6>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                            <span>$<?= $item['item_price'] ?? '0'; ?></span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Close foreach loop -->
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Top Sale Ends -->