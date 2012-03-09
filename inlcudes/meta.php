<?php
/**
* @package WordPress
* @subpackage Kickoff
* Pull in standard meta data for posts in the loop
*/
?>

<footer class="meta">

	<h4><em>Posted on:</em> <data datetime="<?php echo date(DATE_W3C); ?>" pubdate class="updated"><?php the_time('F jS, Y') ?></data></h4>

	<h5><em>Filed in</em>&nbsp;&nbsp;: <?php the_category(', ') ?></h5>
	<h5 class="byline author vcard">
		<em>by</em> 
		<span class="fn"><a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><? the_author_meta('display_name'); ?></a></span>
	</h5>
	<h6><?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?></h6>

</footer>
