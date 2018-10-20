<?php
/**
*	Template used for displaying page content in page.php
*	@package TruVox
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- article header -->
	<header class="entry-header">
		<?php the_title('<h1 class="title-post entry-title">', '</h1>') ?>
	</header>

	<!-- article body -->
	<div class="entry-content">
		<?php the_content();?>
		<?php wp_link_page( array(
			'before' => '<div class="page-links">'. __( 'Pages:','TruVox'),
			'after' => '</div>', ));
		?>
	</div>
	
	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', "TruVox"), '<span class"edit-link">','</span>'); ?>
	</footer>
	</div>
</article>