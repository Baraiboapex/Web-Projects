<?php 
/*
 * Template Name: Listings
*/
?>
<div id = "append-here-head">
<div class = "append-remove-header">
<?php
	
	$listings = array(
		'category_name' => 'listings',
	);
		
   $qlist = new WP_Query($listings);
?>
</div>
</div>
<div class = "wp-head">
<?php get_header();?>
</div>
<section id = "header">
 </section><!--.header-->
<section id = "content">
	<?php echo get_the_ID();?>
    <section id = "news-and-prop-posts">
    <nav id = "listings-nav">
		<?php echo get_query_var('category_name');?>
    <div class = "pos-men">
    	<?php  
        	$locations = array(
        		'theme_location' => 'listingschildnav'
        	);
        	wp_nav_menu($locations);
        ?>
    </div>
	<div class = "hide-show-search">
					<div>
						<?php dynamic_sidebar('searchlistings');?>
					</div>
					<div>
    					<?php get_template_part('templates/listpostnames');?>
    				</div>
				</div>
    </nav>
		<style>
			div#static{
				max-width:640px;
			}
			
			div.align-r{
				width:100%;
			}
			
			div.row{
				margin: 0 auto;
				max-width:1366px;
			}
		</style>
		<div class = "alighn-r">
    	<div class = "row">
    		<div class = "col-sm-7">
    		<div id = "append-here-body">
    		<div class = "append-remove-body">
    			<?php 
    				get_template_part('templates/queryloop');
    				start_query($qlist);
    			?>
    		</div>
    		</div>
    		<div class = "col-sm-5">
				<style scoped>
    			.drop-down-btn{
    				background-image:url('<?php bloginfo("template_url")?>/imgs/drop-down-btn.png');
    			}
    			</style>
				
				<div class = "hide-if-small">
    			<div id = "static" class = "static-menu">
						<div>
    						<?php dynamic_sidebar('searchlistings');?>
						</div>
						<div>
    						<?php get_template_part('templates/listpostnames');?>
    					</div>
				</div>
				</div>
    			</div>
				</div>
    			</div>
				</div>
	 </section>
</section>
<?php get_footer();?>