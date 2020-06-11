<?php
/**
 * The template for displaying the footer.
 *
 * @package Theme Freesia
 * @subpackage Excellent
 * @since Excellent 1.0
 */
?>
</div><!-- end #content -->
<!-- Footer Start ============================================= -->
<footer id="colophon" class="site-footer" role="contentinfo">
<?php
$excellent_settings = excellent_get_theme_options(); 
$footer_column = $excellent_settings['excellent_footer_column_section'];
	if( is_active_sidebar( 'excellent_footer_1' ) || is_active_sidebar( 'excellent_footer_2' ) || is_active_sidebar( 'excellent_footer_3' ) || is_active_sidebar( 'excellent_footer_4' )) { ?>
	<div class="widget-wrap">
		<div class="wrap">
			<div class="widget-area">
			<?php
				if($footer_column == '1' || $footer_column == '2' ||  $footer_column == '3' || $footer_column == '4'){
				echo '<div class="column-'.absint($footer_column).'">';
					if ( is_active_sidebar( 'excellent_footer_1' ) ) :
						dynamic_sidebar( 'excellent_footer_1' );
					endif;
				echo '</div><!-- end .column'.absint($footer_column). '  -->';
				}
				if($footer_column == '2' ||  $footer_column == '3' || $footer_column == '4'){
				echo '<div class="column-'.absint($footer_column).'">';
					if ( is_active_sidebar( 'excellent_footer_2' ) ) :
						dynamic_sidebar( 'excellent_footer_2' );
					endif;
				echo '</div><!--end .column'.absint($footer_column).'  -->';
				}
				if($footer_column == '3' || $footer_column == '4'){
				echo '<div class="column-'.absint($footer_column).'">';
					if ( is_active_sidebar( 'excellent_footer_3' ) ) :
						dynamic_sidebar( 'excellent_footer_3' );
					endif;
				echo '</div><!--end .column'.absint($footer_column).'  -->';
				}
				if($footer_column == '4'){
				echo '<div class="column-'.absint($footer_column).'">';
					if ( is_active_sidebar( 'excellent_footer_4' ) ) :
						dynamic_sidebar( 'excellent_footer_4' );
					endif;
				echo '</div><!--end .column'.absint($footer_column).  '-->';
				}
				?>
			</div> <!-- end .widget-area -->
		</div><!-- end .wrap -->
	</div> <!-- end .widget-wrap -->
	<?php }
		if(class_exists('Excellent_Plus_Features')){
			if(is_page_template('page-templates/excellent-corporate.php') ){
				do_action('excellent_client_box');
			}
		} ?>
	<div class="site-info" <?php if($excellent_settings['excellent-img-upload-footer-image'] !=''){?>style="background-image:url('<?php echo esc_url($excellent_settings['excellent-img-upload-footer-image']); ?>');" <?php } ?>>
		<div class="social-links clearfix">
			<ul>
				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-63"><a href="https://www.linkedin.com/in/mytt-vo/"><span class="screen-reader-text">LinkedIn</span></a></li>
				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-64"><a href="https://github.com/My-VO"><i style="font-size:1.2em" class="fa">&#xf09b;</i><span class="screen-reader-text">GitHub</span></a></li>
			</ul>	
		</div>
	<div class="wrap">
	<?php
		if($excellent_settings['excellent_buttom_social_icons'] == 0):
			do_action('excellent_social_links');
		endif;
		do_action('excellent_footer_menu');
		
		if ( is_active_sidebar( 'excellent_footer_options' ) ) :
		dynamic_sidebar( 'excellent_footer_options' );
		else:
			echo '<div class="copyright">' .'&copy; ' . date_i18n(__('Y','excellent')) .' '; ?>
			<a title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" target="_blank" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_bloginfo( 'name', 'display' ); ?></a> | 
							<?php esc_html_e('Mail:','excellent'); ?> <a title="<?php echo esc_html__( 'vo.mytt@gmail.com', 'excellent' ); ?>" target="_blank" href=""><?php esc_html_e('vo.mytt@gmail.com','excellent');?></a> | 
							<?php esc_html_e('Téléphone:','excellent'); ?> <a title="<?php echo esc_html__( '07 81 94 97 88', 'excellent' ); ?>" target="_blank" href=""><?php esc_html_e('07 81 94 97 88','excellent');?></a>
						</div>
		<?php endif; ?>
			<div style="clear:both;"></div>
		</div> <!-- end .wrap -->
	</div> <!-- end .site-info -->
	<?php
		$disable_scroll = $excellent_settings['excellent_scroll'];
		if($disable_scroll == 0):?>
			<button class="go-to-top" type="button">
				<span class="icon-bg"></span>
				<span class="back-to-top-text"><?php esc_html_e('Top','excellent');?></span>
				<i class="fa fa-angle-up back-to-top-icon"></i>
			</button>
	<?php endif; ?>
	
</footer> <!-- end #colophon -->
</div><!-- end .site-content-contain -->
</div><!-- end #page -->
<?php wp_footer(); ?>
</body>
</html>