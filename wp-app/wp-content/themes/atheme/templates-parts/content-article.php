<div class="container mx-auto my-auto">
    <div class="row">
        <div class="col-md-8">
            <!-- Larger News Article -->
            <div class="col-md-12" style='padding: 20px;'>
                <div class="card">
                    <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="News Image" />
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php the_title(); ?>
                        </h5>
                        <p class="card-text">
                            <?php the_content(); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
