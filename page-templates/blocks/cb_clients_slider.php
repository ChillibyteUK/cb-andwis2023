<section class="clients py-4">
    <div class="container-xl">
        <h2 class="h3 text-green-900 dot mb-4">Our Clients</h2>
        <div class="clients__slider mb-5">
            <?php
            if (get_field('logos', 'options') ?? null) {
                foreach (get_field('logos', 'options') as $l) {
                    ?>
            <div class="clients__card">
                <img src="<?= wp_get_attachment_image_url($l, 'large')?>"
                    alt="">
            </div>
            <?php
                }
            }
            ?>
        </div>
        <div class="text-center">
            <a href="/case-studies/" class="btn btn-primary">Client case studies</a>
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
        $('.clients__slider').slick({
            dots: false,
            arrows: false,
            infinite: true,
            autoplay: true,
            speed: 300,
            slidesToShow: 5,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3
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
            ?>