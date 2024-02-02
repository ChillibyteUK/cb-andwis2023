<section class="clients_grid py-4">
    <div class="container-xl">
        <h2 class="h3 text-green-900 dot mb-4">Our Clients</h2>
        <div class="clients_grid__grid mb-5">
            <?php
        foreach (get_field('logos', 'options') as $l) {
            ?>
            <div class="clients_grid__logo">
                <img src="<?= wp_get_attachment_image_url($l, 'large')?>"
                    alt="">
            </div>
            <?php
        }
            ?>
        </div>
        <div class="text-center">
            <a href="/case-studies/" class="btn btn-primary">Client case studies</a>
        </div>
    </div>
</section>