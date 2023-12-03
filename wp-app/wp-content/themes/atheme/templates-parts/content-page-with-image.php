<?php
/*
Template name: content-page-with-image
*/
get_header();
?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div class='col-xs-12 col-md-8'>
                    

                </div>
            </div>
        </div>
    </section>
</main>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
