<?php get_header();?>
<?php 

	if(isset($_GET['s'])){
		$search = htmlentities($_GET['s']);
	}
	
	$get_arr = array(
		"s" => $search,
		"post_type" =>"post",
		"category__not_in" => array(4)
	);
	
	$qlist = new WP_Query($get_arr);
?>
<section id = "header">
 </section><!--.header-->
<section id = "content">
    <section id = "news-and-prop-posts">
    <nav id = "listings-nav">
    <div class = "pos-men">
		<style scoped>
			a.back-dyn{
				font-family:PT Serif;
				font-style:italic;
				color:gray;
				font-size:37px;
				margin-left:54px;
				text-decoration:none;
			}
			
			.arrow{
				background-color:#185F91;
				height:38px;
				width:38px;
				border-radius:100%;
				text-align:center;
				font-weight:bold;
				color:white;
				margin-right:7px;
			}
			
		</style>
				<a class = "back-dyn" href = "<?php echo get_page_link(74);?>">
					<i class="fa fa-angle-left arrow" style="font-size:37;letter-spacing:12px;"></i>Back
				</a>
    </div>
	<div class = "hide-show-search">
					<div>
						<?php 
							if(get_transient('category') == 'news'){
								dynamic_sidebar('searchnews');
							} else if(get_transient('category') == 'listings'){
								dynamic_sidebar('searchlistings');
							}
						?>
					</div>
				</div>
    </nav><style>
			
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
    			<div id = "static" class = "static-menu">
    				<div class = "hide-if-small">
    					<?php 
							if(get_transient('category')  == 'news'){
								dynamic_sidebar('searchnews');
							} else if(get_transient('category')  == 'listings'){
								dynamic_sidebar('searchlistings');
							}
						?>
    				</div>
    			</div>
    			</div>
    			</div>
    		</div>
    	</div>
    </section>
    </section>
<?php get_footer();?>