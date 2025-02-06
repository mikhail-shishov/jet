<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php gt_set_post_view(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>