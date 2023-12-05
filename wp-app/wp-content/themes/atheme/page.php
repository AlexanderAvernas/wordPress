<?php
get_header();
?>


        <!-- Page Content -->
        <div class="container">
            <header class="hero" style=" padding-top: 30px; padding-bottom: 10px;">
            <div class="container text-white">
                <h2 class="display-8" style="color: black; font-weight: 600;">
            <?php the_title(); ?> <br>
        </h2>
             </div>
</header>



        <?php

        if (have_posts()) {
            while (have_posts()) {
                the_post();


                get_template_part('templates-parts/content', 'page');
            }
        }

        ?>

            </div>

        <?php
        get_footer();
        ?>
