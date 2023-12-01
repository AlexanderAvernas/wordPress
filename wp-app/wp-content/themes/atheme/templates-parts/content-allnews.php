<div class="container">
    <div class="row">
        <div class="col-md-8 mb-2">
            <div class="card" style='width: 80%;'>
                <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="News 1" />
                <div class="card-body">
                    <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <p class="card-text">
                        <ul>
                            <li><?php the_time('j F, Y'); ?></li>
                            <li><?php the_category(", ") ?></li>
                        </ul>
                        <?php the_excerpt(); ?>
                    </p>
                    <a class="more-link" href="<?php the_permalink(); ?>">Read this article</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-4"> <!-- Adjust the column size as needed -->
            <aside>
                <?php get_sidebar(); ?>
            </aside>
        </div>
    </div>
</div>
