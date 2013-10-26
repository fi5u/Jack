<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package _s
 */
?>
	<div id="secondary" class="widgets" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="search" class="widgets__widget--search">
				<?php get_search_form(); ?>
			</aside>

			<aside id="archives" class="widgets__widget--archives">
				<h1 class="widgets__widget__title  widgets__widget--archives__title"><?php _e( 'Archives', '_s' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>

			<aside id="meta" class="widgets__widget--meta">
				<h1 class="widgets__widget__title  widgets__widget--meta__title"><?php _e( 'Meta', '_s' ); ?></h1>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>

		<?php endif; ?>
	</div>
