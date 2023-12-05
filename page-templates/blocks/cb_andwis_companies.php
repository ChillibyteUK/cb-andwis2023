<section class="andwis_companies py-4">
    <div class="container-xl">
        <h2 class="h3 text-green-900 dot mb-5">Our Andwis Group Companies</h2>
        <div class="andwis_companies__slider mb-4">
            <?php
        while (have_rows('andwis', 'options')) {
            the_row();
            ?>
            <div class="andwis_companies__card">
                <img src="<?= wp_get_attachment_image_url(get_sub_field('logo'), 'large')?>"
                    alt="<?=get_sub_field('name')?>">
            </div>
            <?php
        }
            ?>
        </div>
        <div class="text-center">
            <a href="/our-companies/" class="btn btn-primary">More about andwis</a>
        </div>
    </div>
</section>
<?php
add_action('wp_footer', function () {
    ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
    integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
    integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
    integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<script>
    (function($) {
        $('.andwis_companies__slider').slick({
            dots: false,
            arrows: false,
            infinite: true,
            autoplay: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        })
    })(jQuery);
</script>
<?php
}, 9999);
