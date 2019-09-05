<?php get_header(); ?>



  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
    <h4>Posted on <?php the_time('F jS, Y') ?></h4>
 
 
 <?php the_excerpt(); ?>
    
    <?php endwhile; else: ?>
    <?php _e('Sorry, no posts matched your criteria.'); ?>
    <?php endif; ?>       





<?php get_sidebar(); ?>

<?php get_footer(); ?>