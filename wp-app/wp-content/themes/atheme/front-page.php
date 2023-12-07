<?php
get_header();
?>
<header class="hero" style="background-image: url(<?php the_post_thumbnail_url();?>); background-size: cover; background-position: center center; height: 550px; padding-top: 200px;">
            <div class="container text-center text-white">
                <h1 class="display-8" style="color: rgb(15, 15, 16); background-color: rgba(173, 216, 230, 0.5); font-weight: 400; display: flex; justify-content: center;">
                <?php if (is_active_sidebar("home widget")) {
                            dynamic_sidebar("home widget");
                        }  ?> <br>
                </h1>
                <a href="index.php/all-news/" class="btn btn-primary btn-lg" style="background-color: rgba(34, 34, 100, 1.0); margin-top: 20px;">Latest News</a>
            </div>
        </header>

        
        <div id="carouselExampleControls" class="carousel slide mt-0" data-bs-ride="carousel">

        <?php

        if( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                the_content();
            }
        }

        ?>



            </div>
        <?php

        get_footer();
        ?>
