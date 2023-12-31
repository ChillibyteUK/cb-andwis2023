<section class="contact pb-5">
    <div class="container-xl">
        <div class="row g-4">
            <div class="col-lg-6">
                <p><?=get_field('left_intro')?></p>
                <a class="contact__contact" href="tel:<?=parse_phone(get_field('contact_phone','options'))?>">
                    <div class="contact__icon"><p><i class="fa-solid fa-phone-alt"></i></p></div>
                    <div class="contact__detail"><span class="fw-bold fs-6">Call Us</span><br><?=get_field('contact_phone','options')?></div>
                </a>
                <a class="contact__contact" href="mailto:<?=get_field('contact_email','options')?>">
                    <div class="contact__icon"><p><i class="fa-solid fa-envelope"></i></p></div>
                    <div class="contact__detail"><span class="fw-bold fs-6">Email Us</span><br><?=get_field('contact_email','options')?></div>
                </a>
                <div class="contact__contact">
                    <div class="contact__icon"><p><i class="fa-solid fa-map-marker-alt"></i></p></div>
                    <div class="contact__detail"><span class="fw-bold fs-6">Our Address</span><br><?=get_field('contact_address','options')?></div>
                </div>
            </div>
            <div class="col-lg-6">
                <iframe src="<?=get_field('google_maps_src','options')?>"width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>


