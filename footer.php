			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrapper cf">

					<div class="row">
              <div class="col-6">
                <nav role="navigation">
                  <?php wp_nav_menu(array(
                    'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
                    'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
                    'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
                    'menu_class' => 'nav footer-nav cf',            // adding custom nav class
                    'theme_location' => 'footer-links',             // where it's located in the theme
                    'before' => '',                                 // before the menu
                    'after' => '',                                  // after the menu
                    'link_before' => '',                            // before each link
                    'link_after' => '',                             // after each link
                    'depth' => 0,                                   // limit the depth of the nav
                    'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
                  )); ?>
                </nav>
              </div> 
              <div class="col-6">
                <p class="source-org copyright">&copy;<?php echo date('Y'); ?>  Rancho Deluxe Media, LLC. All rights reserved.</p>
              </div>    
          </div>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in assets/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
