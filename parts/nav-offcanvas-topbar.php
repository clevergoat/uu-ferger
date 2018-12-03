<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>
<div data-sticky-container>
	<div class="top-bar" data-sticky data-sticky-on="small" data-options="marginTop:0;" style="width: 100%;" id="top-bar-menu">
		<div class="top-bar-left float-left">
		<div class="logo float-left">
				<img src="<?php echo home_url(); ?>/wp-content/uploads/2018/12/uu-logo.png">
			</div>
			<div class="logo float-left">
				<img src="<?php echo home_url(); ?>/wp-content/uploads/2018/12/sdir_logo.png">
			</div>
			<!--<ul class="menu">
				<li><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
			</ul>-->
		</div>
		<div class="top-bar-right show-for-large">
			<?php joints_top_nav(); ?>	
		</div>

		<div class="top-bar-right float-right hide-for-large">
			<div class="float-left">
			<?php if(!is_front_page() ) : ?>
				<button class="button" style="margin: 0;" type="button" data-toggle="example-dropdown-top-center">Navigere innhold</button>
					<div class="dropdown-pane" data-position="top" data-alignment="center" id="example-dropdown-top-center" data-dropdown data-auto-focus="true">
						<div id="sidebar1" class="sidebar small-12 medium-4 large-4 cell" role="complementary">
							<div class="">
								<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

									<?php dynamic_sidebar( 'sidebar1' ); ?>

								<?php endif; ?>
							</div>
						</div>
					</div>
				<?php endif ;?>
			</div>

			<ul class="menu">
				<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
				<li><a data-toggle="off-canvas"><?php _e( 'Meny', 'jointswp' ); ?></a></li>
			</ul>
		</div>
	</div>
</div>