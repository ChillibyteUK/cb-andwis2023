<?php
$q = new WP_Query(array(
    'post_type' => 'person',
    'posts_per_page' => -1,
));
?>
<section class="people">
    <div class="container-xl">
        <div class="row g-4">
            <?php
            while ($q->have_posts()) {
                $q->the_post();
                ?>
            <div class="col-sm-6 col-md-3 people__card">
                <img class="people__image"
                    src="<?=wp_get_attachment_image_url(get_field('photo', get_the_ID()), 'large')?>"
                    alt="<?=get_the_title()?>">
                <div class="people__name"><?=get_the_title()?></div>
                <div class="people__role">
                    <?=get_field('role', get_the_ID())?>
                </div>
            </div>
            <?php
            }
?>
        </div>
    </div>
</section>