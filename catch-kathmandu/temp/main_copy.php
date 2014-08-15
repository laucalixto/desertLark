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
			
				<div style="height:277px; font-size: 25px;">
					<h1>RECOMENDAÇÕES</h1>
				</div>
					<h1 style="font-size: 25px;">NOSSOS TOURS</h1>
					<div style="width:320px; float:left; display:block;">
							<?php
							$my_query = new WP_Query( 'cat=1' );
							$my_id = 79;
							$queried_page= get_post($my_id);
							$title = $queried_page->post_title;
							$content = $queried_page->post_excerpt;
							$content = apply_filters('the_content', $content);
							$content = str_replace(']]>', ']]>', $content);
							
							
							echo get_the_post_thumbnail($my_id);
							echo "<h1>" . $title . "</h1>";
							echo "<p>" . $content . "</p>";
							//echo	 get_the_excerpt();
							?>
							<div class="readmore">
							<a href="<?php the_permalink(); ?>">EXPLORE MAIS</a>
						
							
							
					</div>
					
					<div style="width:320px; float:left;">
						<?php
							$my_id = 82;
							$queried_page= get_post($my_id);
							$title = $queried_page->post_title;
							$content = $queried_page->post_excerpt;
							$content = apply_filters('the_content', $content);
							$content = str_replace(']]>', ']]>', $content);
							echo get_the_post_thumbnail($my_id);
							echo "<h1>" . $title . "</h1>";
							echo "<p>" . $content . "</p>";
							echo the_excerpt('Continue Reading');
							?>
					</div>
						
						<div style="width:320px; float:left;">
						<?php
							$my_id = 84;
							$queried_page= get_post($my_id);
							$title = $queried_page->post_title;
							$content = $queried_page->post_excerpt;
							$content = apply_filters('the_content', $content);
							$content = str_replace(']]>', ']]>', $content);
							echo get_the_post_thumbnail($my_id);
							echo "<h1>" . $title . "</h1>";
							echo "<p>" . $content . "</p>";
							echo the_excerpt('Continue Reading');
							?>
					</div>
						
				<div>
					CLIMA DE MARROCOS DURANTE O ANO
				</div>	
				<div>
					Opções de pagamento
				</div>
						
						
			</div>
	</div>

<div id="main" class="container">
	<hr style="margin-bottom:0px; margin-top:20px;"></hr>
</div>
<?php get_footer(); ?>