<?php function start_query($q) { ?>
<?php if($q->have_posts()):?>
    			<?php while($q->have_posts()): $q->the_post();?>
    			<div class = "art-posts">
    				<a class = "a-img-link" href = "<?php echo get_the_permalink(get_the_ID());?>">
						<?php if(has_post_thumbnail(get_the_ID())):?>
							<style>
								img.art-img{
									width:100%;
								}
								@media(max-width:2163px){
									img.art-img{
										width:100%;
										margin-top:0px;
									}
								}
								@media(max-width:1063px){
									img.art-img{
										width:100%;
										margin-top:0px;
									}
									
									div.art-posts{
										padding: 10px 10px 100px 10px;
										margin:0px;
									}
								}
								@media(max-width:763px){
									img.art-img{
										width:130%;
										margin-left:-30%;
									}	
								}
								@media(max-width:463px){
									img.art-img{
										width:130%;
									}
								}
							</style>
						<?php endif;?>
						<?php if(has_post_thumbnail()):?>
						<div class = "article-image" >
								<img class = "art-img" src = "<?php echo get_the_post_thumbnail_url( get_the_ID());?>" alt = "#"/>
      					</div>
						<?php endif;?>
      				</a>
      				<article class = "about-art">
      				<h3 class = "about-art-head">
					<?php if (get_transient('category') == 'news'){?>
						<style scoped>
							a.link-to-art,a.link-to-art:hover{
								text-decoration:none;
								color:#185F91;
							}
						</style>
						<a class = "link-to-art" href = "<?php echo get_permalink(get_the_ID())?>"><?php the_title();?></a>
					<?php }else if(get_transient('category') == 'listings'){ ?>
						<?php the_title();?>
					<?php } ?>
					</h3>
      				<p class = "about-art-content">
      					<?php the_excerpt();?>
      				</p>
      			</article>
      			<div class = "rm-contain">
      				<center>
      					<a href = "<?php echo get_permalink(get_the_ID());?>">
      						<p class = "rm-label">Read More</p>
      						<hr class = "line"/>
      					</a>
      				</center>
      			</div>
      				<div class = "inline-this">
      				<?php if(metadata_exists('post',get_the_ID(),'property link')):?>
      				<style scoped>
      					div.to-house-btn{
      						background-image:url('<?php echo bloginfo("template_url");?>/imgs/right-arrow.png');
      					}
      				</style>
      				<a class = "bak-to-nal" href = "<?php echo get_post_meta(get_the_ID(),'property link',true);?>">
						<div class = "to-house-btn">
							<p class = "to-listing-page">View Property Info</p>
						</div>
					</a>
					</div>
					<?php endif;?>
</div>
    <?php endwhile; wp_reset_postdata();?>
<?php else:?>
	<style>
		
		div.no-results{
			width:100%;
		}
		
		div.no-results h1{
			padding-top:33%;
			padding-bottom:33%;
			width:75%;
			color:grey;
			display:block;
			margin: 0 auto;
			text-align:center;
		}
		
	</style>
	<div class = "no-results">
		<h1>Sorry, Your search request was not found</h1>
	</div>
<?php endif;?>
<?php } ?>