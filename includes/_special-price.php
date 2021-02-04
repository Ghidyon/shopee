<?php

// include app.php file containing all important constants and MySQL scripts
require_once('./app.php');

// Fetch product data
// $product_shuffle = $product->getData();
?>

<!-- Special Price -->
<section id="special-price">
    <div class="container">
        <h4 class="font-rubik font-size-20">Special Price</h4>
        <div class="d-flex justify-content-end">
            <div id="filters" class="btn-group font-size-16 font-baloo">
                <button class="btn is-checked" data-filter="*">All Brands</button>
                <button class="btn" data-filter=".Apple">Apple</button>
                <button class="btn" data-filter=".Samsung">Samsung</button>
                <button class="btn" data-filter=".Redmi">Redmi</button>
            </div>
        </div>

        <div class="grid">
            <!-- Map through every item in product_shuffle array -->
            <?php array_map(function($item){ ?>
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
                                <span>$<?= $item['item_price'] ?? 0;?></span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="grid-item Samsung border">
                <div class="item py-2" style="width:200px;">
                    <div class="product font-raleway">
                        <a href="#"><img src="./assets/products/11.png" class="img-fluid" alt="Product1"></a>
                        <div class="text-center">
                            <h6>Samsung Galaxy 10</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$1499</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item Redmi border">
                <div class="item py-2" style="width:200px;">
                    <div class="product font-raleway">
                        <a href="#"><img src="./assets/products/3.png" class="img-fluid" alt="Product1"></a>
                        <div class="text-center">
                            <h6>Redmi Note 8</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$1499</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item Samsung border">
                <div class="item py-2" style="width:200px;">
                    <div class="product font-raleway">
                        <a href="#"><img src="./assets/products/1.png" class="img-fluid" alt="Product1"></a>
                        <div class="text-center">
                            <h6>Samsung Galaxy 9</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$1499</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item Redmi border">
                <div class="item py-2" style="width:200px;">
                    <div class="product font-raleway">
                        <a href="#"><img src="./assets/products/2.png" class="img-fluid" alt="Product1"></a>
                        <div class="text-center">
                            <h6>Redmi Note 8</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$1499</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item Apple border">
                <div class="item py-2" style="width:200px;">
                    <div class="product font-raleway">
                        <a href="#"><img src="./assets/products/14.png" class="img-fluid" alt="Product1"></a>
                        <div class="text-center">
                            <h6>Apple iPhone 5</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$1499</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item Apple border">
                <div class="item py-2" style="width:200px;">
                    <div class="product font-raleway">
                        <a href="#"><img src="./assets/products/15.png" class="img-fluid" alt="Product1"></a>
                        <div class="text-center">
                            <h6>Apple iPhone 6</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$1499</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item Redmi border">
                <div class="item py-2" style="width:200px;">
                    <div class="product font-raleway">
                        <a href="#"><img src="./assets/products/4.png" class="img-fluid" alt="Product1"></a>
                        <div class="text-center">
                            <h6>Redmi Note 8</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$1499</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item Samsung border">
                <div class="item py-2" style="width:200px;">
                    <div class="product font-raleway">
                        <a href="#"><img src="./assets/products/11.png" class="img-fluid" alt="Product1"></a>
                        <div class="text-center">
                            <h6>Samsung Galaxy S2</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$1499</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item Redmi border">
                <div class="item py-2" style="width:200px;">
                    <div class="product font-raleway">
                        <a href="#"><img src="./assets/products/5.png" class="img-fluid" alt="Product1"></a>
                        <div class="text-center">
                            <h6>Redmi Note 8</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$1499</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item Redmi border">
                <div class="item py-2" style="width:200px;">
                    <div class="product font-raleway">
                        <a href="#"><img src="./assets/products/6.png" class="img-fluid" alt="Product1"></a>
                        <div class="text-center">
                            <h6>Redmi Note 8</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$1499</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item Samsung border">
                <div class="item py-2" style="width:200px;">
                    <div class="product font-raleway">
                        <a href="#"><img src="./assets/products/12.png" class="img-fluid" alt="Product1"></a>
                        <div class="text-center">
                            <h6>Samsung Galaxy 23</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$1499</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item Redmi border">
                <div class="item py-2" style="width:200px;">
                    <div class="product font-raleway">
                        <a href="#"><img src="./assets/products/8.png" class="img-fluid" alt="Product1"></a>
                        <div class="text-center">
                            <h6>Redmi Note 8</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$1499</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item Redmi border">
                <div class="item py-2" style="width:200px;">
                    <div class="product font-raleway">
                        <a href="#"><img src="./assets/products/10.png" class="img-fluid" alt="Product1"></a>
                        <div class="text-center">
                            <h6>Redmi Note 8</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$1499</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div> -->
            <?php }, $product_shuffle ); ?>
        </div>
    </div>
</section>
<!-- Special Price Ends -->