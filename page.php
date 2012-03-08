<?php
/**
 * @package WordPress
 * @subpackage HTML5-Kickoff
 */

get_header(); ?>

<section id="main" role="main">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article class="post" id="post-<?php the_ID(); ?>">
  
		<header>
			<h2><?php the_title(); ?></a></h2>
		</header>

		<?php the_content('Read the rest of this entry &raquo;'); ?>
  

		<?php include (TEMPLATEPATH . '/_inc/meta.php' ); ?>
  
	</article>

	<?php include (TEMPLATEPATH . '/_inc/browse.php' ); ?>

<?php endwhile; endif; ?>


</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
