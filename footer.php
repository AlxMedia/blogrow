		</div><!--/.main-->
	</div><!--/.container-->
	
	<footer id="footer">
		<div class="fslant-topleft"></div>
		<div class="fslant-topright"></div>
		<div class="fslant-bottomleft"></div>
		<div class="fslant-bottomright"></div>
		<?php // footer widgets
			$total = 4;
			if ( get_theme_mod( 'footer-widgets','0' ) != '' ) {
				
				$total = get_theme_mod( 'footer-widgets' );
				if( $total == 1) $class = 'one-full';
				if( $total == 2) $class = 'one-half';
				if( $total == 3) $class = 'one-third';
				if( $total == 4) $class = 'one-fourth';
				}

				if ( ( is_active_sidebar( 'footer-1' ) ||
					   is_active_sidebar( 'footer-2' ) ||
					   is_active_sidebar( 'footer-3' ) ||
					   is_active_sidebar( 'footer-4' ) ) && $total > 0 ) 
		{ ?>		
		<div id="footer-widgets" class="container">
			<div class="pad group">
				<?php $i = 0; while ( $i < $total ) { $i++; ?>
					<?php if ( is_active_sidebar( 'footer-' . $i ) ) { ?>
		
				<div class="footer-widget-<?php echo esc_attr( $i ); ?> grid <?php echo esc_attr( $class ); ?> <?php if ( $i == $total ) { echo 'last'; } ?>">
					<?php dynamic_sidebar( 'footer-' . $i ); ?>
				</div>
		
					<?php } ?>
				<?php } ?>
			</div><!--/.pad-->
		</div><!--/#footer-widgets-->	
		<?php } ?>

		<div id="footer-bottom">
			<div class="container">
			
				<a id="back-to-top" href="#"><i class="fas fa-angle-up"></i></a>
				
				<div class="pad group">				
					<div class="grid one-half">
					
						<?php if ( get_theme_mod('footer-logo') ): ?>
							<img id="footer-logo" src="<?php echo esc_url( get_theme_mod('footer-logo') ); ?>" alt="<?php echo esc_attr( get_bloginfo('name')); ?>">
						<?php endif; ?>
						
						<div id="copyright">
							<?php if ( get_theme_mod( 'copyright' ) ): ?>
								<p><?php echo esc_html( get_theme_mod( 'copyright' ) ); ?></p>
							<?php else: ?>
								<p><?php bloginfo(); ?> &copy; <?php echo esc_html( date_i18n( esc_html__( 'Y', 'blogrow' ) ) ); ?>. <?php esc_html_e( 'All Rights Reserved.', 'blogrow' ); ?></p>
							<?php endif; ?>
						</div><!--/#copyright-->
						
						<?php if ( get_theme_mod( 'credit', 'on' ) == 'on' ): ?>
						<div id="credit">
							<p><?php esc_html_e('Powered by','blogrow'); ?> <a href="http://wordpress.org" rel="nofollow">WordPress</a>. <?php esc_html_e('Theme by','blogrow'); ?> <a href="https://agnarson.com" rel="nofollow">Alx</a>.</p>
						</div><!--/#credit-->
						<?php endif; ?>
						
					</div>		
					<div class="grid one-half last">	
						<?php if ( get_theme_mod( 'footer-social', 'on' ) == 'on' ): ?>
							<?php blogrow_social_links() ; ?>
						<?php endif; ?>
					</div>		
				</div><!--/.pad-->
				
			</div><!--/.container-->
		</div><!--/#footer-bottom-->
		
	</footer><!--/#footer-->

</div><!--/#wrapper-->

<?php wp_footer(); ?>
</body>
</html>