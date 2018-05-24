<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shabbir
 */

?>
<div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-4 mt-3'); ?>>
    <div class="rounded bg-white p-2">
	
	
	<div class="img_blog">
		<?php shabbir_post_thumbnail(); ?>
	</div>
	<div class="content_blog pt-3 pb-3">
		<div>
			<h5 class="font-weight-bold mb-0"><a href="<?php the_permalink(); ?>" class="text-dark"><?php the_title(); ?></a></h5>
		</div>
		<div class="mt-3">
			<p class="h6 text-muted date_blog mb-0"><?php the_time('j F Y'); ?> <a href="#" class="text-custom font-weight-bold">By <?php the_author(); ?></a></p>
			<p class="mt-3 desc_blog text-muted"><?php echo wp_trim_words(get_the_content(),14, '</p>
			<p class="h6 mb-0"><a href="'.get_the_permalink().'" class="text-muted font-weight-bold">Read More...</a>' ); ?></p>
		</div>
	</div>
	
	
</div>
</div>
