<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<small style="display: block;">
			<?php 
				if(get_field('son-page-description', $post->ID)) {
					the_field('son-page-description', $post->ID);
				}
			?>
		</small> 

		<!-- Remover com theme option -->
		<?php 
			if(get_field('son-options-show-edit-button', 'option')) {
				twentyseventeen_edit_link( get_the_ID() );
			}
		 ?>
		
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php
			the_content();

			if(get_field('son-page-views', $post->ID)) {
				echo get_field('son-page-views', $post->ID) . ' visualizações';
			}

			
			if( have_rows('son-page-tags') ):
				echo "<p>";
				while( have_rows('son-page-tags') ) : the_row();
						echo get_sub_field('tag') . ', ';
				endwhile;
				echo "</p>";
			else :
				echo 'no tags...';
			endif;

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
					'after'  => '</div>',
				)
			);
			?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
