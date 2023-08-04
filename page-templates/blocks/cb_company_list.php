<section class="companies py-5">
    <?php
    while (have_rows('andwis','options')) {
        the_row();
        ?>
    <section class="company py-5">
        <div class="container-xl">
            <div class="row g-4">
                <div class="col-md-2 text-center">
                    <img src="<?=wp_get_attachment_image_url(get_sub_field('logo'),'large')?>" alt="">
                </div>
                <div class="col-md-6">
                    <h2 class="h3"><?=get_sub_field('name')?></h2>
                    <?=get_sub_field('company_detail')?>
                    <a href="<?=get_sub_field('site_url')?>" target="_blank" class="text-green-900"><?=get_sub_field('site_url')?></a>
                </div>
                <div class="col-md-4 company__services">
                    <?php
                    foreach(get_sub_field('services') as $s) {
                        ?>
                        <a class="company__service" href="/what-we-do/#<?=$s['value']?>">
                            <img src="<?=get_stylesheet_directory_uri()?>/img/icons/icon__<?=$s['value']?>--400.svg">
                            <p><?=$s['label']?></p>
                        </a>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
        <?php
    }
    ?>
</section>