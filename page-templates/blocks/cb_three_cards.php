<?php
function card_colour($f)
{
    $bg = 'bg--green-900';
    $is = '400';
    switch($f) {
        case 'Dark':
            $bg = 'bg--green-900 text-white';
            $is = '400';
            break;
        case 'Mid':
            $bg = 'bg--green-400 text-green-900';
            $is = '900';
            break;
        case 'Light':
            $bg = 'bg--green-200 text-green-900';
            $is = '900';
            break;
    }
    return [$bg,$is];
}

[$bg1,$is1] = card_colour(get_field('card_1_colour'));
[$bg2,$is2] = card_colour(get_field('card_2_colour'));
[$bg3,$is3] = card_colour(get_field('card_3_colour'));
[$bg4,$is4] = card_colour(get_field('card_4_colour'));

?>
<section class="three_cards py-4">
    <div class="container-xl">
        <div class="row g-4">
            <div class="col-md-6 col-xl-3">
                <div class="three_cards__card <?=$bg1?>">
                    <div>
                        <h2 class="h3 mb-4">
                            <?=get_field('card_1_title')?>
                        </h2>
                        <p><?=get_field('card_1_content')?>
                        </p>
                    </div>
                    <img src="<?=get_stylesheet_directory_uri()?>/img/icons/icon__built-in-<?=strtolower(get_field('card_1_icon'))?>--<?=$is1?>.svg"
                        alt="">
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="three_cards__card <?=$bg2?>">
                    <h2 class="h3 mb-4">
                        <?=get_field('card_2_title')?>
                    </h2>
                    <p><?=get_field('card_2_content')?>
                    </p>
                    <img src="<?=get_stylesheet_directory_uri()?>/img/icons/icon__built-in-<?=strtolower(get_field('card_2_icon'))?>--<?=$is2?>.svg"
                        alt="">
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="three_cards__card <?=$bg3?>">
                    <h2 class="h3 mb-4">
                        <?=get_field('card_3_title')?>
                    </h2>
                    <p><?=get_field('card_3_content')?>
                    </p>
                    <img src="<?=get_stylesheet_directory_uri()?>/img/icons/icon__built-in-<?=strtolower(get_field('card_3_icon'))?>--<?=$is3?>.svg"
                        alt="">
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="three_cards__card <?=$bg4?>">
                    <h2 class="h3 mb-4">
                        <?=get_field('card_4_title')?>
                    </h2>
                    <p><?=get_field('card_4_content')?>
                    </p>
                    <img src="<?=get_stylesheet_directory_uri()?>/img/icons/icon__built-in-<?=strtolower(get_field('card_4_icon'))?>--<?=$is4?>.svg"
                        alt="">
                </div>
            </div>
        </div>
    </div>
</section>