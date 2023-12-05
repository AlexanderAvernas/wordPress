<?php get_header(); ?>

<!-- Page Content -->
<header class="hero" style=" padding: 5px 0; text-align: center;">
    <div class="container text-white">
        <h4 class="display-6" style="color: black; font-weight: 600;">
            <?php single_post_title(); ?>
        </h4>
    </div>
</header>
<div class="container mt-5">
    <div class="row">
        <div class="carousel slide col-md-7 custom-newscard" data-bs-ride="carousel">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    get_template_part('templates-parts/content', 'allnews');
                }
            }
            ?>


        </div>

        <div class="col-md-4 order-md-2 mt-4"> <!-- Displayed after other content on mobile view -->
            <aside>
                <?php get_sidebar(); ?>
            </aside>
        </div>
    </div>

    <!-- Display aside before other content on larger screens -->
    <div class="row d-none d-md-flex">
        <div class="col-md-4 mt-4 order-md-1">
            <aside>
                <?php get_sidebar(); ?>
            </aside>
        </div>
    </div>
</div>
<div class="container custom-pagination">
    <nav aria-label="Page navigation">
        <?php
        echo '<h5>' . paginate_links(array(
            'prev_text' => __('« Previous'),
            'next_text' => __('Next »'),
        )) . '</h5>';
        ?>
    </nav>
</div>

<?php get_footer(); ?>
