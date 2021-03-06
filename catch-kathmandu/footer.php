<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Catch Themes
 * @subpackage Catch Kathmandu
 * @since Catch Kathmandu 1.0
 */
?>

	<?php 
    /** 
     * catchkathmandu_content_sidebar_end hook
     *
     * @hooked catchkathmandu_content_sidebar_wrap_end - 10
	 * @hooked catchkathmandu_third_sidebar - 15
     */
    do_action( 'catchkathmandu_content_sidebar_end' ); 
    ?>  

	</div><!-- #main .site-main -->
    
	<?php 
    /** 
     * catchkathmandu_after_main hook
     */
    do_action( 'catchkathmandu_after_main' ); 
    ?> 
 
	<footer id="colophon" role="contentinfo">
		<?php
        /** 
         * catchkathmandu_before_footer_sidebar hook
         */
        do_action( 'catchkathmandu_before_footer_sidebar' );    

		/* A sidebar in the footer? Yep. You can can customize
		 * your footer with three columns of widgets.
		 */
		get_sidebar( 'footer' ); 

		/** 
		 * catchkathmandu_after_footer_sidebar hook
		 */
		do_action( 'catchkathmandu_after_footer_sidebar' ); ?>   
        
        <div id="site-generator" class="container">
			<?php 
            /** 
             * catchkathmandu_before_site_info hook
             */
            do_action( 'catchkathmandu_before_site_info' ); ?>  
		<div>
			<hr style="margin-top:-1px;"></hr>
		</div>
  <div id="page" class="hfeed site">

		<div class="container-footer">
        	<div class="logo-footer">
            	<?php 
				 
				echo '<div class="logo-footer-img">' . wp_get_attachment_image( 91 ) . '</div>';
				?> 
          	</div><!-- .site-info -->
            <div class="address-footer-info">
						<div class="address-footer-info-text"><p>+212 (0)537 762265<br />2 Avenue de Mohamed El Fassi - Rabat - Marrocos<br />0000000000000000</p>
						</div>
				
          	</div><!-- .site-info -->
			
    </div><!-- #page .hfeed .site -->

<?php 
/** 
 * catchkathmandu_after hook
 */
do_action( 'catchkathmandu_after' );

wp_footer(); ?>

</body>
</html>