<div class="container">
            <div class="card" style='width: 100%;'>
                <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="News 1" />
                <div class="card-body">
                    <h4 class="card-title"><a class="custom-newshead" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <p class="card-text">
                        <ul>
                            <li style="color: #777;"><?php the_time('j F, Y'); ?></li>
                            <li style="color: rgba(34, 34, 100, 1.0);"><?php the_category(", ") ?></li>
                        </ul>
                        <?php the_excerpt(); ?>
                    </p>
                    <a class="more-link custom-newslink" href="<?php the_permalink(); ?>">Read More</a>
                </div>
            </div>
</div>
