<section class="andwis_companies_grid py-4">
    <div class="container-xl">
        <h2 class="h3 text-green-900 dot mb-5">Our Andwis Group Companies</h2>
        <div class="andwis_companies_grid__grid mb-4">
            <?php
        if (have_rows('andwis', 'options')) {
            while (have_rows('andwis', 'options')) {
                the_row();
                ?>
            <div class="andwis_companies_grid__logo">
                <img src="<?= wp_get_attachment_image_url(get_sub_field('logo'), 'large')?>"
                    alt="<?=get_sub_field('name')?>">
            </div>
            <?php
            }
        }
            ?>
        </div>
        <div class="text-center">
            <a href="/our-companies/" class="btn btn-primary">More about andwis</a>
        </div>
    </div>
</section>