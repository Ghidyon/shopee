$(document).ready(function () {

    // Banner Owl Carousel
    $('#banner-area .owl-carousel').owlCarousel({
        dots: true,
        items: 1
    });

    // Top Sale Owl Carousel
    $('#top-sale .owl-carousel').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });

    // Isotope Filter
    var $grid = $('.grid').isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
    });

    // Special Products Filter on button click
    $('.btn-group').on('click', 'button', function () {
        // When a button is clicked. return the data filter attribute
        var filterValue = $(this).attr('data-filter');
        // Pass filter value into isotope object
        $grid.isotope({ filter: filterValue });
    });

    // New Phone Owl Carousel
    $('#new-phone .owl-carousel').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });

    // Blogs Owl Carousel
    $('#blogs .owl-carousel').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            }
        }
    });

    // Product Quantity
    $qtyUp = $('.qty .qty-up');
    $qtyDown = $('.qty .qty-down');

    // Total price element
    let $totalPrice = $('#sub-total');

    // Increment Quantity
    $qtyUp.click(function(e){

        // Get the input element using the data-id attribute of the button
        let $qtyInput = $( ` .qty .qty-input[data-id='${ $(this).data('id') }'] ` );

        // Get the price field using the data-id attribute of the price element
        let $price = $( ` .product-price[data-id='${ $(this).data('id') }'] ` );

        // Change product price using ajax call
        $.ajax({
            url: 'includes/ajax.php', // file path to send response to
            type: 'POST',
            data: { itemid: $(this).data('id') }, // returns the data-id attribute of the button as item_id
            success: function(result) { // callback function that carries the response of the request
                // Convert json data gotten from ajax.php, to object
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if ( $qtyInput.val() >= 1 && $qtyInput.val() <= 9 ) {
                    // Get current value of input and increment
                    $qtyInput.val(function( index, currentValue ){
                        return ++currentValue;
                    });

                    // Increase price of product according to quantity
                    $price.text(parseInt(item_price * $qtyInput.val()).toFixed(2));
                    // parseInt() converts string to integer
                    // toFixed(n) => returns n decimal digits

                    // Set subtotal price
                    let subTotal = parseInt($totalPrice.text()) + parseInt(item_price);
                    $totalPrice.text(subTotal.toFixed(2));
                }
            }
        });
        
    });

    // Decrement Quantity
    $qtyDown.click(function(e){

        // Get the input element using the data-id attribute of the button
        let $qtyInput = $( `.qty .qty-input[data-id='${ $(this).data('id') }']` );

        // Get the price field using the data-id attribute of the price element
        let $price = $( ` .product-price[data-id='${ $(this).data('id') }'] ` );

        // Change product price using ajax call
        $.ajax({
            url: 'includes/ajax.php', // file path to send response to
            type: 'POST',
            data: { itemid: $(this).data('id') }, // returns the data-id attribute of the button as item_id
            success: function(result) { // callback function that carries the response of the request
                // Convert json data gotten from ajax.php, to object
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if ( $qtyInput.val() > 1 ) {
                    // Get current value of input and decrement
                    $qtyInput.val(function( index, currentValue ){
                        return --currentValue;
                    });

                    // Increase price of product according to quantity
                    $price.text(parseInt(item_price * $qtyInput.val()).toFixed(2));
                    // parseInt() converts string to integer
                    // toFixed(n) => returns n decimal digits

                    // Set subtotal price
                    let subTotal = parseInt($totalPrice.text()) - parseInt(item_price);
                    $totalPrice.text(subTotal.toFixed(2));
                }  
            }
        });
    })
});