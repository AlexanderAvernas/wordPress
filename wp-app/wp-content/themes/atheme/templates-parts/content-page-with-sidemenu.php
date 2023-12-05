<?php
/*
Template name: content-page-with-sidemenu
*/
get_header();
?>

<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>

        <main style="padding: 30px;">
            <section>
                <div class="container">
                    <div class="row">
                        <div class='col-xs-12 col-md-8'>
                            <h2> <?php the_title(); ?> </h2>
                            <p> <?php the_content(); ?> </p>
                        </div>

                        <div class='col-xs-12 col-md-4'>
                            <?php wp_nav_menu(array('theme_location' => 'sidemenu')) ?>
                        </div>
                    </div>
                </div>
            </section>
        </main>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
