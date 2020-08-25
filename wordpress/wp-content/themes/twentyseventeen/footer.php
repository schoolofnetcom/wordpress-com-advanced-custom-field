<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>

		<style>
			ul li {
				display: inline;
			}
		</style>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
				<?php


				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) :
					?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'social',
									'menu_class'     => 'social-links-menu',
									'depth'          => 1,
									'link_before'    => '<span class="screen-reader-text">',
									'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
								)
							);
						?>
					</nav><!-- .social-navigation -->
					<?php
				endif;

				get_template_part( 'template-parts/footer/site', 'info' );
				?>

				<div>
				<?php
					if( have_rows('son-options-social', 'option') ):
						?>
						<h2>Minhas redes sociais</h2>
						<?php
						while( have_rows('son-options-social', 'option') ) : the_row();
								?>
									<li><a target="_blank" href="<?= get_sub_field('link'); ?>"><?= get_sub_field('rede'); ?></a></li>
								<?php
						endwhile;
					endif;
				?>

				<?php
					if( have_rows('son-options-contact-info', 'option') ):
						?>
						<h2>Contato</h2>
						<?php
						while( have_rows('son-options-contact-info', 'option') ) : the_row();
								?>
									<p><strong><?= get_sub_field('chave'); ?>: </strong> <?= get_sub_field('valor'); ?></p>
								<?php
						endwhile;
					endif;
				?>
				</div>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
