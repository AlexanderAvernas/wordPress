<?php
get_header();
?>

        <!-- Page Content -->

        <div id="carouselExampleControls" class="carousel slide mt-5" data-bs-ride="carousel">

        <header class="hero" style="background-color: #f5f5f5; padding: 30px 0; text-align: center;">
    <div class="container text-white">
        <h1 class="display-6" style="color: black; font-weight: 400;">
            <?php
            single_post_title();
            ?>
        </h1>
    </div>
</header>

        <h1>
            <?php
            single_post_title()
            ?>
        </h1>


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
