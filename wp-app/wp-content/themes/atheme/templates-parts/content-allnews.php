<div class="container">
<div class="col-md-8 mb-2">

                            <div class="card" style='width: 80%;'>

                                <img
                                    src="<?php the_post_thumbnail_url();?>"
                                    class="card-img-top"
                                    alt="News 1"
                                />
                                <div class="card-body">
                                    <h5 class="card-title"> <a href=" <?php the_permalink(); ?>"> <?php the_title(); ?> </a></h5>
                                    <p> <?php the_date(); ?> </p>
                                    <p class="card-text">
                                    <?php
                                    the_excerpt();
                                    ?>

</div>
<a class="more-link" href="<?php the_permalink(); ?>">Read this article</a>

                                    </p>
                                </div>
                            </div>
                        </div>
