<?php
$id = get_field('service');
$bg = get_field('background') == 'Grey' ? 'has-grey-background-color' : '';
?>
<a class="anchor" id="<?=$id?>"></a>
<section class="service py-5 <?=$bg?>">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-2">
                <img src="<?=get_stylesheet_directory_uri()?>/img/icons/icon__<?=$id?>--400.svg" alt="">
            </div>
            <div class="col-md-10">
                <h2><?=get_field('title')?></h2>
                <?=get_field('content')?>
                <?php
                $companies = get_field('andwis','options');
                if ($companies) {
                    echo '<div class="companies mt-4">';
                    foreach ($companies as $c) {
                        foreach ($c['services'] as $s) {
                            if ($s['value'] == $id) {
                            ?>
                    <a href="<?=$c['site_url']?>" target="_blank">
                        <img src="<?=wp_get_attachment_image_url($c['logo'],'large')?>" alt="">
                    </a>
                            <?php
                            }
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>