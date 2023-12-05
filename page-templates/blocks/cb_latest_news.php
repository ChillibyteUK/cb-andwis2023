<section class="latest_news py-4">
    <div class="container-xl">
        <h2 class="h3 text-green-900 dot">Latest News</h2>
        <div class="latest_news__grid">
            <?php
            $q = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 3
            ));
            while ($q->have_posts()) {
                $q->the_post();
                ?>
            <a class="latest_news__card"
                href="<?=get_the_permalink()?>">
                <img src="<?=get_the_post_thumbnail_url(get_the_ID(), 'large')?>"
                    alt="">
                <div class="latest_news__container">
                    <h3 class="h4"><?=get_the_title()?></h3>
                    <p><?=get_the_date('jS F Y', get_the_ID())?>
                    </p>
                </div>
            </a>

            <?php
            }
            ?>
        </div>
    </div>
</section>