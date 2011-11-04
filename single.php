<?php
/**
 * @package WordPress
 * @subpackage HTML5-Kickoff
 */

get_header(); ?>

<section id="main" role="main">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <article <?php post_class('col10 left'); ?> id="post-<?php the_ID(); ?>">
    <header>
      <h2><?php the_title(); ?></a></h2>
    </header>

    <?php the_content('Read the rest of this entry &raquo;'); ?>
    <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
    <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>

		<?php include (TEMPLATEPATH . '/_inc/meta.php' ); ?>

		<?php include (TEMPLATEPATH . '/_inc/browse.php' ); ?>

    <?php comments_template(); ?>

  </article>

<?php endwhile; else: ?>

  <p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

</section>

<?php get_footer(); ?>
