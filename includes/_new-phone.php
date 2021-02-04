<?php
// Randomize order of items in product array
shuffle($product_array);
?>

<!-- New Phone -->
<section id="new-phone">
    <div class="container">
        <h4 class="font-rubik font-size-20">New Phone</h4>
        <hr>

        <div class="owl-carousel owl-theme">
            <?php foreach ( $product_array as $item ): ?>
            <div class="item py-2 bg-light">
                <div class="product font-raleway">
                    <a href="product.php?item_id=<?= $item['item_id']; ?>">
                        <img src="<?= $item['item_image'] ?? './assets/products/1.png'; ?>" class="img-fluid" alt="<?= $item['item_brand']; ?> product">
                    </a>
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
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- New Phone Ends -->