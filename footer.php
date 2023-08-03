<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<div id="footer-top"></div>
<footer class="footer pt-5">
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-4">
                    <img src="<?=get_stylesheet_directory_uri()?>/img/andwis-logo--wo.svg"
                        class="footer__logo" alt="" width=250 height=160>
                </div>
            </div>
            <div class="col-lg-2">
                <?=wp_nav_menu(array('theme_location' => 'footer_menu1'))?>
            </div>
            <div class="col-lg-2 ">
                <?=wp_nav_menu(array('theme_location' => 'footer_menu2'))?>
            </div>
            <div class="col-lg-2 ">
                ADDRESS
            </div>
        </div>
    </div>
    <div class="colophon">
        <div class="container py-2">
            <div class="d-flex flex-wrap justify-content-between">
                <div class="col-md-8 text-center text-md-start">
                    &copy; <?=date('Y')?> andwis | 
                    <a href="/terms-conditions/">Terms &amp; Conditions</a> |
                    <a href="/privacy-policy/">Privacy Policy</a> |
                    <a href="/anti-slavery-policy/">Anti-Slavery Policy</a>
                </div>
                <div class="col-md-4 d-flex align-items-center justify-content-end flex-wrap gap-3">
                    <a href="https://www.chillibyte.co.uk/" rel="nofollow noopener" target="_blank" class="cb"
                        title="Digital Marketing by Chillibyte"></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer();
if (get_field('gtm_property', 'options')) {
    ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe
        src="https://www.googletagmanager.com/ns.html?id=<?=get_field('gtm_property', 'options')?>"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
}
?>
</body>

</html>