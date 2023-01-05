(function ($) {
    "use strict";

    new WOW().init();

    //navbar cart
    $(".cart_link > a").on("click", function () {
        $(".mini_cart").addClass("active");
    });

    $(".mini_cart_close > a").on("click", function () {
        $(".mini_cart").removeClass("active");
    });

    //sticky navbar
    $(window).on("scroll", function () {
        if (window.innerWidth < 600) return
        var scroll = $(window).scrollTop();
        if (scroll < 100) {
            $(".sticky-header").removeClass("sticky");
        } else {
            $(".sticky-header").addClass("sticky");
        }
    });

    // background image
    function dataBackgroundImage () {
        $("[data-bgimg]").each(function () {
            var bgImgUrl = $(this).data("bgimg");
            $(this).css({
                "background-image": "url(" + bgImgUrl + ")", // concatenation
            });
        });
    }

    $(window).on("load", function () {
        dataBackgroundImage();
    });

    //for carousel slider of the slider section
    $(".slider_area").owlCarousel({
        animateOut: "fadeOut",
        autoplay: true,
        loop: true,
        nav: false,
        autoplayTimeout: 6000,
        items: 1,
        dots: true,
    });

    //product column responsive
    $(".product_column3").slick({
        centerMode: true,
        mobileFirst: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        // rows: 2,
        arrows: true,
        prevArrow: '<button class="prev_arrow"><i class="ion-chevron-left"></i></button>',
        nextArrow: '<button class="next_arrow"><i class="ion-chevron-right"></i></button>',
        // responsive: [{
        //   breakpoint: 1024,
        //   settings: {
        //     slidesToShow: 4,
        //     slidesToScroll: 1,
        //     centerMode: false,
        //   }
        // }]
        responsive: [{
            breakpoint: 400,
            settings: {
                centerMode: true,
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 768,
            settings: {
                centerMode: true,
                slidesToShow: 2,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 992,
            settings: {
                centerMode: true,
                slidesToShow: 3,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 1200,
            settings: {
                centerMode: true,
                slidesToShow: 4,
                slidesToScroll: 1,
            },
        },
        ],
    });

    //for tooltip
    $('[data-toggle="tooltip"]').tooltip();

    //tooltip active
    $(".action_links ul li a, .quick_button a,.single_product").tooltip({
        animated: "fade",
        placement: "top",
        container: "body",
    });

    //product row activation responsive
    $(".product_row1").slick({
        centerMode: true,
        centerPadding: "0",
        slidesToShow: 5,
        arrows: true,
        prevArrow: '<button class="prev_arrow"><i class="ion-chevron-left"></i></button>',
        nextArrow: '<button class="next_arrow"><i class="ion-chevron-right"></i></button>',
        responsive: [{
            breakpoint: 400,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            },
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            },
        },
        {
            breakpoints: 1200,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4,
            },
        },
        ],
    });

    // blog section
    $(".blog_column3").owlCarousel({
        autoplay: true,
        loop: true,
        nav: true,
        autoplayTimeout: 5000,
        items: 3,
        dots: false,
        margin: 30,
        navText: [
            '<i class="ion-chevron-left"></i>',
            '<i class="ion-chevron-right"></i>',
        ],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
        },
    });

    //navactive responsive
    $(".product_navactive").owlCarousel({
        autoplay: false,
        loop: true,
        nav: true,
        items: 4,
        dots: false,
        navText: [
            '<i class="ion-chevron-left arrow-left"></i>',
            '<i class="ion-chevron-right arrow-right"></i>',
        ],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            250: {
                items: 2,
            },
            480: {
                items: 3,
            },
            768: {
                items: 4,
            },
        },
    });

    $(".modal").on("shown.bs.modal", function (e) {
        $(".product_navactive").resize();
    });

    $(".product_navactive a").on("click", function (e) {
        e.preventDefault();
        var $href = $(this).attr("href");
        $(".product_navactive a").removeClass("active");
        $(this).addClass("active");
        $(".product-details-large .tab-pane").removeClass("active show");
        $(".product-details-large " + $href).addClass("active show");
    });
})(jQuery);


$('[data-target="#modal_box"]').click(function () {
    $('.product_navactive').hide();


    let data = JSON.parse($(this).attr("data"));

    $('.modal_title h2').html(data.name);
    if (data.description == null) {
        $('.modal_description').hide();
    } else {
        $('.modal_description p').html(data.description);
    }
    $('.brand').html(data.brand.name);
    if (data.selling_price == null) {
        $('.old_price').hide();
        $('.new_price').html(data.original_price + ' Da');
    } else {
        $('.old_price').show();
        $('.old_price').html(data.original_price + ' Da');
        $('.new_price').html(data.selling_price + ' Da');
    }
    if (data.poids == null) {
        $('.weight').hide();
    } else {
        $('.weight').show();
        $('.weight').html(data.poids + ' g');
    }

    const ulImage = $('.product-details-large')
    ulImage.empty();
    let mainImage = `<div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="${data.image}" alt=""></a>
                                            </div>
                                        </div>`
    ulImage.append(mainImage);
    for (let i = 0; i < data.images.length; i++) {
        let image = `<div class="tab-pane fade" id="tab${i + 1}" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="${data.images[i]}" alt=""></a>
                                            </div>
                                        </div>`
        ulImage.append(image);
    }

    const ulNav = $('.product_navactive')
    ulNav.empty();
    let mainNav = `<li>
                                        <a href="#tab1" class="nav-link active" data-toggle="tab" role="tab"
                                                    aria-controls="tab1" aria-selected="false"><img
                                                        src="${data.image}" alt=""></a>
                                            </li>`
    ulNav.append(mainNav);
    for (let i = 0; i < data.images.length; i++) {
        let nav = `<li>
                                        <a href="#tab${i + 1}" class="nav-link" data-toggle="tab" role="tab"
                                                    aria-controls="tab1" aria-selected="false"><img
                                                        src="${data.images[i]}" alt=""></a>
                                            </li>`
        ulNav.append(nav);
    }
    $('.product_navactive').owlCarousel('destroy');

    $(".product_navactive").owlCarousel({
        autoplay: false,
        loop: true,
        nav: true,
        items: 4,
        dots: false,
        navText: [
            '<i class="ion-chevron-left arrow-left"></i>',
            '<i class="ion-chevron-right arrow-right"></i>',
        ],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            250: {
                items: 2,
            },
            480: {
                items: 3,
            },
            768: {
                items: 4,
            },
        },
    });
    $('.product_navactive').show();



})