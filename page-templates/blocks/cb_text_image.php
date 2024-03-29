<?php
$colour = get_field('theme');
$background = '';
switch ($colour) {
    case 'Dark':
        $background = 'has-dark-background-color text-white';
        break;
    case 'Mid':
        $background = 'has-grey-background-color';
        break;
        // case 'Light':
        //     $background = '';
        //     break;
}

$breakout = '';
if (get_field('breakout')[0] ?? null && get_field('breakout')[0] == 'Yes') {
    $breakout = $background;
    $background = '';
}

$splitText = 'col-md-6';
$splitImage = 'col-md-6';

if (get_field('split') == '6040') {
    $splitText = 'col-md-8';
    $splitImage = 'col-md-4';
}
if (get_field('split') == '7030') {
    $splitText = 'col-md-10';
    $splitImage = 'col-md-2';
}

$orderText = 'order-2 order-md-1';
$orderImage = 'order-1 order-md-2';

if (get_field('order') == 'image') {
    $orderText = 'order-2 order-md-2';
    $orderImage = 'order-1 order-md-1';
}

$classes = $block['className'] ?? 'py-5';
?>
<section class="text_image <?=$breakout?>">
    <div
        class="container-xl <?=$background?>  <?=$classes?>">
        <div class="d-lg-none">
            <h2 class="dot text-green-900">
                <?=get_field('title')?>
            </h2>
        </div>
        <div class="row align-items-center g-4">
            <div
                class="<?=$splitText?> <?=$orderText?>">
                <?php
                if (get_field('title')) {
                    ?>
                <h2 class="dot d-none d-lg-block text-green-900 mb-4">
                    <?=get_field('title')?></h2>
                <?php
                }
                if (get_field('subtitle')) {
                    ?>
                <h3 class="text-green-400 mb-4">
                    <?=get_field('subtitle')?>
                </h3>
                <?php
                }
?>
                <div><?=get_field('content')?>
                </div>
                <?php
if (get_field('cta')) {
    $link = get_field('cta');
    ?>
                <a href="<?=$link['url']?>"
                    class="btn btn--accent"><?=$link['title']?></a>
                <?php
}
?>
            </div>
            <div
                class="<?=$splitImage?> <?=$orderImage?> text-center">
                <?=wp_get_attachment_image(get_field('image'), 'large', null, array('class' => 'text_image__image'))?>
            </div>
        </div>
    </div>
</section>