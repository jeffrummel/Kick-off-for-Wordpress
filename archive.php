<?php
/**
 * @package WordPress
 * @subpackage HTML5-Kickoff
 */

get_header(); ?>

<div id="main" role="main">

  <?php if (have_posts()) : ?>

  <section>

		<?php include (TEMPLATEPATH . '/_inc/browse.php' ); ?>

    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
    <?php /* If this is a category archive */ if (is_category()) { ?>
    <h1 class="pagetitle">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h1>
    <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
    <h1 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>
    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
    <h1 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h1>
    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
    <h1 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h1>
    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
    <h1 class="pagetitle">Archive for <?php the_time('Y'); ?></h1>
    <?php /* If this is an author archive */ } elseif (is_author()) { ?>
    <h1 class="pagetitle">Author Archive</h1>
    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
    <h1 class="pagetitle">Blog Archives</h1>
    <?php } ?>

		<?php include (TEMPLATEPATH . '/_inc/browse.php' ); ?>

    <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class() ?>>
      <header>
        <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
        <time datetime="<?php the_time('Y-m-d')?>"><?php the_time('l, F jS, Y') ?></time>
      </header>

      <?php the_content() ?>

		<?php include (TEMPLATEPATH . '/_inc/meta.php' ); ?>
    </article>

		<?php include (TEMPLATEPATH . '/_inc/browse.php' ); ?>

  </section>
<?php endwhile; ?>

  <?php else :

  if ( is_category() ) { // If this is a category archive
    printf("<h1>Sorry, but there aren't any posts in the %s category yet.</h1>", single_cat_title('',false));
  } else if ( is_date() ) { // If this is a date archive
    echo("<h1>Sorry, but there aren't any posts with this date.</h1>");
  } else if ( is_author() ) { // If this is a category archive
    $userdata = get_userdatabylogin(get_query_var('author_name'));
    printf("<h1>Sorry, but there aren't any posts by %s yet.</h1>", $userdata->display_name);
  } else {
    echo("<h1>No posts found.</h1>");
  }
  get_search_form();

  endif;
  ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
