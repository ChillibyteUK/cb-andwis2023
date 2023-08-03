<?php
$img = wp_get_attachment_image_url( get_field('background') ,'full');


$class = $block['className'] ?? null ?: '';

?>
<link rel="preload" as="image" href="<?=$img?>">
<header class="hero <?=$class?>" style="background-image: url(<?=$img?>)">
    <div class="container-xl px-0">
        <div class="titles">
            <div class="h1 dot"><?=get_field('title')?></div>
        <?php
        if (get_field('subtitle')) {
            ?>
            <div class="h2"><?=get_field('subtitle')?></div>
            <?php
        }
        if (get_field('cta')) {
            $cta = get_field('cta');
            ?>
            <a class="btn btn-primary" href="<?=$cta['url']?>"><?=$cta['title']?></a>
            <?php
        }
        ?>
        </div>
    </div>
</header>
