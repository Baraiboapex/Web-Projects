<?php 
	
	$wcat = get_transient('category');
	
	$l_cat = array(
		'category_name' => $wcat,
		'posts_per_page' => 4
	);
	
	$wq = new WP_Query($l_cat);
?>
<div class = "recent-posts">
	<h4 class = "recent-posts-header">
    	<?php 
    		if(get_transient('category') == 'listings'){
    			echo "Recently Added Properties";
    		} else if(get_transient('category') == 'news') {
    			echo "Recent News Articles";
    		}
    	?>
	</h4>
<div class = "recent-posts-content">
	<ul>
		<?php if($wq->have_posts()):?>
			<?php while($wq->have_posts()):$wq->the_post();?>
			<li>
				<a class = "new-post" href = "<?php echo get_the_permalink(get_the_ID());?>"><?php the_title();?> - <span class = "p-date-span"><?php echo get_the_date('l, F j, Y',get_the_ID()); ?></span></a>
			</li>
			<?php endwhile; wp_reset_postdata();?>
		<?php endif;?>
	</ul>
</div>