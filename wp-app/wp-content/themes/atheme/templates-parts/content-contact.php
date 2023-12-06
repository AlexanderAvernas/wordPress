<?php
/*
Template Name: content-contact
*/
get_header();
?>
<div class="container text-center mt-4">
<h2> <?php the_title(); ?> </h2>
</div>

<div class="container">
    <div class="row justify-content-center p-4">
        <div class="col-md-6">
            <div class="contact-form">
                <?php echo do_shortcode('[contact-form-7 id="3492405" title="Contact form 1"]'); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
