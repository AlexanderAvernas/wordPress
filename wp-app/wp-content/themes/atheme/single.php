<?php
get_header();
?>


        <!-- Page Content -->

        <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
        <header class="hero" style=" padding: 10px 0; text-align: center;">
    <div class="container text-white">
        <h4 class="display-6" style="color: black; font-weight: 600;">
            <?php the_title(); ?> <br>
        </h4>
    </div>
</header>

        <?php

        if (have_posts()) {
            while (have_posts()) {
                the_post();


                get_template_part('templates-parts/content', 'article');
            }
        }

        ?>
            </div>

        <?php
        get_footer();
        ?>
