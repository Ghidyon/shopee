<?php

// Display brand filter functionality from database
// Map through product_array and return item brands
$brands = array_map(function ($item) {
    return $item['item_brand'];
}, $product_array);

// Remove duplicate brands from the array and returns array of non-repetitive brands
$unique_brands = array_unique($brands);

// Sort an array in ascending order(values) and assigns indexed keys
sort($unique_brands);

// Sort an associative array in ascending order(value), retains the keys
// asort($unique_brands);

// Randomize order of items in product array
shuffle($product_array);
?>

<!-- Special Price -->
<section id="special-price">
    <div class="container">
        <h4 class="font-rubik font-size-20">Special Price</h4>
        <div class="d-flex justify-content-end">
            <div id="filters" class="btn-group font-size-16 font-baloo">
                <button class="btn is-checked" data-filter="*">All Brands</button>

                <!-- Display brand filter functionality -->
                <!-- Map through unique_brands array and print out brand filter buttons -->
                <?php array_map(function ($brand) {
                    // outputs a formatted string
                    // %s stands for string format
                    printf('<button class="btn is-checked" data-filter=".%s">%s</button>', $brand, $brand);
                }, $unique_brands);
                ?>
            </div>
        </div>

        <div class="grid">
            <!-- Map through every item in product_array -->
            <?php array_map(function ($item) { ?>
                <div class="grid-item <?= $item['item_brand']; ?> border">
                    <div class="item py-2" style="width:200px;">
                        <div class="product font-raleway">
                            <a href="#"><img src="<?= $item['item_image'] ?? './assets/products/13.png'; ?>" class="img-fluid" alt="Product<?= $item['item_id'] ?? 'Unknown'; ?>"></a>
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
                                    <span>$<?= $item['item_price'] ?? 0; ?></span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }, $product_array); ?>
        </div>
    </div>
</section>
<!-- Special Price Ends -->