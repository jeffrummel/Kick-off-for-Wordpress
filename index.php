<?php
/**
 * @package WordPress
 * @subpackage HTML5-Kickoff
 */

get_header(); ?>

<section id="main" role="main" class="clearfix">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

      <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <header>
          <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          <data datetime="<?php the_time('Y-m-d')?>"><?php the_time('F jS, Y') ?></data>
          <span class="author">by <?php the_author() ?></span>
        </header>

        <p><?php the_excerpt('Read the rest of this entry &raquo;'); ?></p>

		<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>

      </article>

    <?php endwhile; ?>
	
	<?php include (TEMPLATEPATH . '/_/inc/browse.php' ); ?>

  <?php else : ?>

    <h2>Not Found</h2>
    <p>Sorry, but you are looking for something that isn't here.</p>
    <?php get_search_form(); ?>

  <?php endif; ?>
</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>


