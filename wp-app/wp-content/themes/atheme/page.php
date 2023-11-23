<?php get_header();
?>
<!-- start loop -->

<?php if (have_posts()):
    while (have_posts()):
        the_post() ?>
         <h1><?php the_title() ?></h1>
         <p><?php the_content(); ?></p>
     <?php endwhile; ?>
<?php endif; ?>

<?php get_footer();
?>
