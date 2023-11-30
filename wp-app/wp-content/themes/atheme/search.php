<?php
get_header();
?>

        <!-- Page Content -->
        <div id="carouselExampleControls" class="carousel slide mt-5" data-bs-ride="carousel">

        <?php

        if (have_posts()) {
            while (have_posts()) {
                the_post();


                get_template_part('templates-parts/content', 'allnews');
            }
        }

        ?>
            </div>

        <?php
        get_footer();
        ?>
