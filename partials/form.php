<section id="CONTACT" class="contact"> <!-- main block -->
    <div class="container"> <!-- container max-width 1200px -->
        <div class="get-in-touch"> <!-- form heading -->
            <h2><?php the_field('cf_contact_form_name'); ?></h2>
        </div>
        <div class="form-content"> <!-- form content -->
            <form class="contact-form">
                <?php echo do_shortcode(get_field('contact_form_shortcode')); ?> 
            </form>
        </div>
    </div>
</section> <!-- main block closed -->