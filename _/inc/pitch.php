<div id="pitch">
	<div class="title">
		<h1><em>&amp;</em> Below You'll <br />Find My Recent Work</h1>
		<footer class="postinfo">
			
			<div class="continue"><h5>Click on an image or title below to view screenshots.</h5></div>

			<div class="continue"><h6><em>See All</em> : <a href="<?php echo get_option('home'); ?>/portfolio">Portfolio</a></h6></div>
			
		</footer>
	</div>	
	<?php $loop = new WP_Query( array( 'post_type' => 'portfolio', 'work' => 'web', 'posts_per_page' => 3, 'orderby' => 'menu_order', 'order' => 'ASC' ) ); ?>

	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

	<div id="post-<?php the_ID(); ?>" class="portfolio-front"> 
		  
		<?php $contact_meta = get_post_custom($post->ID, 'contact_meta', true);
		if ($contact_meta) {
		?>
		 
			
		   <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium'); ?></a>
			<h3 class="entry-title">
			<?php the_title( '<a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a>' ); ?> : <em><?php echo get_the_term_list( $post->ID, 'work', ' ', '' ); ?></em></h3>

			<?php } else { ?>

			<p>No specification available.</p>

			<?php } ?>

	</div>
	<?php endwhile; ?>

	<?php $loop = new WP_Query( array( 'post_type' => 'portfolio', 'work' => 'illustrations', 'posts_per_page' => 2, 'orderby' => 'menu_order', 'order' => 'ASC' ) ); ?>

</div>
<hr class="clear" />
