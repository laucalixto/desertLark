<?php
/**
 * Template Name: Home
 *
 * @package WordPress
 * @subpackage Theme Name
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">	
				
				<div id="content-two-column">
					<div id="recommendation-block">
						<div class="title-home-middle-1">
							<h1>RECOMENDAÇÕES</h1>
						</div>
						
						<?php 
				 			echo '<div id="recommendation-block-img">' . wp_get_attachment_image( 100) . '</div>';
						?> 
						<?php 
				 			echo '<div id="recommendation-block-img">' . wp_get_attachment_image( 99 ) . '</div>';
						?> 
												
						
					</div >
					
					<div id="testimonial-block">
						
							<div class="title-home-middle-1">
									<h1>DEPOIMENTO DE CLIENTES</h1>
							</div>
								<?php
									if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home Middle 1') ) :?>
								<?php endif; ?>
						
					</div>
				</div>
				<div class="aligncenter" style="width:221px; border-top:1px solid #231f20;"></div>
							
					<div class="title-feature-block-home"> 
							<h1 >NOSSOS TOURS</h1>
					</div>
				
					<div class="content-three-column">
					
						<div class="column-left">
							<?php
								$my_id = 79;
								$queried_page= get_post($my_id);
								$title = $queried_page->post_title;
								$content = $queried_page->post_excerpt;
								//$content = apply_filters('the_content', $content);
								//$content = str_replace(']]>', ']]>', $content);
							
								echo '<div id="feature-thumbnail-home" class="align-column-left">' . get_the_post_thumbnail($my_id) .'</div>';
							
								echo '<div id="feature-title-home" class="align-column-left"><h1>' . $title . '</h1></div>';
							
								echo '<div id="feature-home-excerpt" class="align-column-left"><p>' . $content . '</p></div>';
							
								echo '<div id="feature-home-button" class="align-column-button-left"><a href=' . get_permalink($my_id) .'>EXPLORE MAIS</a></div>';
								?>
														
						</div>
					
						<div class="column-center">
							<?php
								$my_id = 82;
								$queried_page= get_post($my_id);
								$title = $queried_page->post_title;
								$content = $queried_page->post_excerpt;
								//$content = apply_filters('the_content', $content);
								//$content = str_replace(']]>', ']]>', $content);
							
								echo '<div id="feature-thumbnail-home" class="align-column-center">' . get_the_post_thumbnail($my_id) .'</div>';
							
								echo '<div id="feature-title-home" class="align-column-center"><h1>' . $title . '</h1></div>';
							
								echo '<div id="feature-home-excerpt" class="align-column-center"><p>' . $content . '</p></div>';
								
								echo '<div id="feature-home-button" class="align-column-button-center"><a href=' . get_permalink($my_id) .'>EXPLORE MAIS</a></div>';
								?>
														
						</div>
					
						<div class="column-right">
							<?php
								$my_id = 84;
								$queried_page= get_post($my_id);
								$title = $queried_page->post_title;
								$content = $queried_page->post_excerpt;
								//$content = apply_filters('the_content', $content);
								//$content = str_replace(']]>', ']]>', $content);
							
								echo '<div id="feature-thumbnail-home" class="align-column-right">' . get_the_post_thumbnail($my_id) .'</div>';
							
								echo '<div id="feature-title-home" class="align-column-right"><h1>' . $title . '</h1></div>';
							
								echo '<div id="feature-home-excerpt" class="align-column-right"><p>' . $content . '</p></div>';
							
								echo '<div id="feature-home-button" class="align-column-button-right"><a href=' . get_permalink($my_id) .'>EXPLORE MAIS</a></div>';
								?>
														
						</div>
					</div>
				
				<div class="aligncenter" style="width:221px; border-top:1px solid #231f20;"></div>
				
				
				<div>
					
					<div class="title-feature-block-home"> 
							<h1 >ÚLTIMOS POSTS</h1>
					</div>
					
					
					<div class="content-three-column-posts">
						<?php 
						global $post; 
						$postslist = get_posts('numberposts=3&order=DESC');
					
						foreach ($postslist as $post) : setup_postdata($post); ?>
						
						<div class="column-left-posts">
						
							
							<div id="feature-thumbnail-home-posts" class="align-column-left"> <?php the_post_thumbnail( 'small-thumb' ); ?></div>
						
							 <div id="feature-title-home" class="align-column-left"><h1><?php the_title(); ?></h1></div>
							
							<div id="feature-home-excerpt" class="align-column-left"><p><?php  the_excerpt();?></p></div>	 
								
							<div id="feature-home-button" class="align-column-button-left"><a href=' <?php the_permalink(); ?>'>CONTINUE LENDO</a></div>	
												
						</div>								
						
						
						<?php endforeach; ?>
					</div>
								
				</div>
				
				
				<div class="aligncenter" style="width:221px; border-top:1px solid #231f20;"></div>
				
				<div>
				
					<div id="containder-home-2">
						<?php
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home Middle 2') ) :
						?>
						<?php endif; ?>
					</div >
															
				
				</div>
				
				
		
		</div>
		

	</div>		
		<?php 
    /** 
     * catchkathmandu_content_sidebar_end hook
     *
     * @hooked catchkathmandu_content_sidebar_wrap_end - 10
	 * @hooked catchkathmandu_third_sidebar - 15
     */
    do_action( 'catchkathmandu_content_sidebar_end' ); 
    ?>  
	</div>
	<?php 
    /** 
     * catchkathmandu_after_main hook
     */
    do_action( 'catchkathmandu_after_main' ); 
    ?> 
	
	<div id="container-home-3-4">
		<div id="page" class="hfeed site" style=" background-color:#dbdcde;">
					<div id="containder-divs-home-3-4">
							<div id="container-home-3">
								<div id="title-home-middle-3"> 
									<h1 >Opções de pagamento</h1>
								</div>
								<?php
									if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home Middle 3') ) :
									?>
								<?php endif; ?>
							</div>
						
							<div id="container-home-4">
								<div  id="box-home-middle-4">
									<?php
									if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home Middle 4') ) :
									?>
									<?php endif; ?>
								</div >
							</div >
					</div >
		</div >
	</div >
<?php get_footer(); ?>