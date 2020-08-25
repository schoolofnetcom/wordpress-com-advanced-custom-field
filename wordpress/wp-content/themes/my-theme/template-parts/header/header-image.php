<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>
<div class="custom-header">

		<!-- <div class="custom-header-media"> -->
			<?php // the_custom_header_markup(); ?>
		<!-- </div> -->

		<?php 
			$topBanner = get_field('son-page-top-banner', $post->ID) ? get_field('son-page-top-banner', $post->ID) : 'http://localhost/wordpress/wp-content/themes/twentyseventeen/assets/images/header.jpg';
		?>

		<div class="custom-header-media">
			<div id="wp-custom-header" class="wp-custom-header">
				<img src="<?= $topBanner; ?>" alt="Iniciando com Advanced Custom Fields" />
			</div>	

				<!-- http://localhost/wordpress/wp-content/uploads/2020/08/banner.jpg  -->
		</div>

	<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

</div><!-- .custom-header -->
