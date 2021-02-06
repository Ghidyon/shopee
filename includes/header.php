<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopee - Online Store</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Owl Carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />

    <!-- Font Awesome Icons CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/typography.css">
    <link rel="stylesheet" href="styles/color.css">
    <link rel="stylesheet" href="styles/top-sale.css">
    <link rel="stylesheet" href="styles/special-price.css">
</head>

<body>

    <!-- Header Starts -->
    <header id="header">
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class="font-raleway font-size-12 text-black-50 m-0">Jordan Calderon 430-985 Eleifend St. Duluth
                Washington 92611 (427) 930-5255</p>

            <div class="font-raleway font-size-14">
                <a href="#" class="px-3 border-start border-end text-dark">Login</a>
                <a href="#" class="px-3 border-end text-dark">Wishlist (0)</a>
            </div>
        </div>

        <!-- Navigation bar starts -->
        <nav class="navbar navbar-expand-lg navbar-dark sec-color-bg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Shopee</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto font-rubik">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">On Sale</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Categories <i class="fas fa-chevron-down"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products <i class="fas fa-chevron-down"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                    </ul>

                    <form action="#" class="font-size-14 font-raleway">
                        <a href="cart.php" class="rounded-pill py-2 pri-color-bg text-decoration-none">
                            <span class="text-white px-2 font-size-16"><i class="fas fa-shopping-cart"></i></span>
                            <span class="px-3 py-2 bg-light text-dark rounded-pill">
                            <?= count($product->getData('cart')); // get the number of items in the cart table ?>
                            </span>
                        </a>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Navigation bar ends -->
    </header>
    <!-- Header Ends -->

    <!-- Main Starts -->
    <main id="main">