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
});