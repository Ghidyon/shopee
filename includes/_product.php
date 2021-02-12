<?php
// Fetch cart data
$cart_array = $product->getData('cart');

// Get cart_item_ids in an array
$cart_item_id = $cart->cartItemId($cart_array);

// Get item_id from http link
$item_id = $_GET['item_id'] ?? 1;

// Request method POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // When top_sale_submit(add to cart) button is clicked
    if (isset($_POST['add_item'])) {
        $user_id = $_POST['user_id'];
        $item_id = $_POST['item_id'];

        // call addToCart method
        $cart->addToCart($user_id, $item_id);
        // reload page to retain item
        header('location:' . $_SERVER['PHP_SELF'] . '?item_id=' . $item_id);
    }
}

// Loop through each product in the product_array
foreach ($product_array as $item) :

    // Match item_id on http link with item_id in the product_array
    if ($item['item_id'] === $item_id) :
?>

        <!-- Product -->
        <section id="product">
            <div class="container py-3">
                <div class="row">

                    <!-- Product Image -->
                    <div class="col-sm-6">
                        <img src="<?= $item['item_image'] ?? './assets/products/1.png'; ?>" alt="<?= $item['item_brand']; ?> product" class="img-fluid">
                        <form method="POST" class="row pt-3 font-size-16 font-baloo">
                            <div class="col">
                                <button type="submit" class="btn btn-danger form-control">Proceed to Buy</button>
                            </div>
                            <input type="hidden" name="user_id" value="<?= 1; ?>"> <!-- Hide input field carrying user_id information -->
                            <input type="hidden" name="item_id" value="<?= $item['item_id'] ?? 1; ?>"> <!-- Hide input field carrying item_id information -->
                            <div class="col">
                                <?php
                                // if item is already in the cart, make the button unclickable and change the write-up
                                if (in_array($item['item_id'], $cart_item_id)) {
                                    echo '<button type="submit" disabled class="btn btn-success form-control">Already in Cart</button>';
                                } else {
                                    echo '<button type="submit" name="add_item" class="btn btn-warning form-control">Add to Cart</button>';
                                }
                                ?>
                            </div>
                        </form>
                    </div>
                    <!-- Product Image Ends -->

                    <!-- Product Specifications -->
                    <div class="col-sm-6 py-5">

                        <!-- Product Name -->
                        <h5 class="font-baloo font-size-20"><?= $item['item_name'] ?? 'Unknown'; ?></h5>
                        <small>By <?= $item['item_brand'] ?? 'Brand'; ?></small>
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <a href="" class="px-2 font-size-14 font-raleway text-decoration-none">20534 ratings | 1000+
                                answered questions</a>
                        </div>
                        <hr class="m-0">
                        <!-- Product Name Ends -->

                        <!-- Product Price -->
                        <table class="my-3">
                            <tr class="font-size-14 font-raleway">
                                <td>M.R.P:</td>
                                <td class="text-decoration-line-through ps-2">$1,899</td>
                            </tr>
                            <tr class="font-size-14 font-raleway">
                                <td>Deal Price:</td>
                                <td class="font-size-20 text-danger ps-2">$<span><?= $item['item_price'] ?? 0; ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;inclusive of all taxes.</small></td>
                            </tr>
                            <tr class="font-size-14 font-raleway">
                                <td>You Save:</td>
                                <td class="text-danger font-size-16 ps-2"><span>$400</span></td>
                            </tr>
                        </table>
                        <!-- Product Price Ends -->

                        <!-- Policy -->
                        <div id="policy">
                            <div class="d-flex">
                                <div class="return me-5 text-center">
                                    <div class="font-size-20 my-2 sec-color">
                                        <i class="fas fa-retweet border p-3 rounded-pill"></i>
                                    </div>
                                    <a href="#" class="font-raleway font-size-12 text-decoration-none sec-color">10 Days
                                        <br /> Replacement</a>
                                </div>
                                <div class="return me-5 text-center">
                                    <div class="font-size-20 my-2 sec-color">
                                        <i class="fas fa-truck border p-3 rounded-pill"></i>
                                    </div>
                                    <a href="#" class="font-raleway font-size-12 text-decoration-none sec-color">Worldwide
                                        <br /> Delivery</a>
                                </div>
                                <div class="return me-5 text-center">
                                    <div class="font-size-20 my-2 sec-color">
                                        <i class="fas fa-check-double border p-3 rounded-pill"></i>
                                    </div>
                                    <a href="#" class="font-raleway font-size-12 text-decoration-none sec-color">1 Year
                                        <br /> Warranty</a>
                                </div>
                            </div>
                        </div>
                        <!-- Policy Ends -->

                        <hr>

                        <!-- Order Details -->
                        <div id="order-details" class="d-flex flex-column font-raleway text-dark">
                            <small>Delivery by: Dec 24 - Jan 5</small>
                            <small>Sold by <a href="#" class="text-decoration-none sec-color">Highway Electronics</a>
                                (4.5 out of 5 | 18,198 ratings)</small>
                            <small><i class="fas fa-map-marker-alt"></i>&nbsp; Deliver to Customer - 50071</small>
                        </div>
                        <!-- Order Details Ends -->

                        <!-- Color & Qty -->
                        <div class="row">

                            <!-- Color -->
                            <div class="col-6">
                                <div class="color my-3">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="font-baloo">Color</h6>
                                        <div class="p-2 yellow-color-bg rounded-circle">
                                            <button class="btn"></button>
                                        </div>
                                        <div class="p-2 pri-color-bg rounded-circle">
                                            <button class="btn"></button>
                                        </div>
                                        <div class="p-2 sec-color-bg rounded-circle">
                                            <button class="btn"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Color Ends -->

                            <!-- Quantity -->
                            <div class="col-6">
                                <div class="qty d-flex">
                                    <h6 class="font-baloo">Qty</h6>
                                    <div class="d-flex px-2">
                                        <button class="qty-down border bg-light" data-id="product">
                                            <i class="fas fa-angle-down"></i>
                                        </button>
                                        <input type="text" class="qty-input border px-2 text-center w-50 bg-light" value="1" disabled data-id="product">
                                        <button class="qty-up border bg-light" data-id="product">
                                            <i class="fas fa-angle-up"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Quantity Ends -->

                        </div>
                        <!-- Color & Qty Ends -->

                        <!-- Size -->
                        <div id="size" class="my-2">
                            <h6 class="font-baloo">Size</h6>
                            <div class="d-flex justify-content-between w-75">
                                <div class="font-rubik rounded border">
                                    <button class="btn font-size-14 p-2">4GB RAM</button>
                                </div>
                                <div class="font-rubik rounded border">
                                    <button class="btn font-size-14 p-2">6GB RAM</button>
                                </div>
                                <div class="font-rubik rounded border">
                                    <button class="btn font-size-14 p-2">8GB RAM</button>
                                </div>
                            </div>
                        </div>
                        <!-- Size Ends -->
                    </div>
                    <!-- Product Specifications Ends -->

                    <!-- Product Description -->
                    <div class="col-sm-12">
                        <h6 class="font-rubik">Product Description</h6>
                        <hr>
                        <p class="font-raleway font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Explicabo provident soluta voluptatem labore sequi repudiandae consectetur voluptas enim
                            iure optio voluptates perferendis eum veniam laudantium ipsam tenetur, autem quisquam
                            dolores aut? Aspernatur, nemo tempora expedita eum atque velit maiores soluta, debitis
                            quibusdam ex consequuntur ea eveniet at pariatur fuga! Tempore?</p>
                        <p class="font-raleway font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Explicabo provident soluta voluptatem labore sequi repudiandae consectetur voluptas enim
                            iure optio voluptates perferendis eum veniam laudantium ipsam tenetur, autem quisquam
                            dolores aut? Aspernatur, nemo tempora expedita eum atque velit maiores soluta, debitis
                            quibusdam ex consequuntur ea eveniet at pariatur fuga! Tempore?</p>
                    </div>
                    <!-- Product Description Ends -->

                </div>
            </div>
        </section>
        <!-- Product Ends -->

<?php
    endif;
endforeach;
?>