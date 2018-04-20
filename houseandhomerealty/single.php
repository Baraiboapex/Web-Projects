<?php get_header();?>
	<style>
		div.center-fix{
			padding:125px 0px 125px 0px;
			width:100%;
		}
		
		div.center-content{
			position:relative;
			margin:0 auto;
			max-width:960px;
			box-shadow: 0px 0px 20px lightgray;
			padding:15px;
		}
		
		article.art-body h2{
			font-family: PT serif;
			border-bottom: 3px solid #185F91;
			color:#185F91;
			
		}
		
		article.art-body h2:nth-child(1){
			margin-top:60px;
		}
		
		img.size-full{
			max-width:605px;
		}
		
		@media(max-width:763px){
			div.center-fix{
				width:100%;
			}
			
			div.center-content{
				padding:0px;
			}
			
		}
	</style>
	<div class = "center-fix">
	<div class = "center-content">
	<section class = "content">
    	<section class = "indi-art-content">
    						<style>
								section.header-image{
									overflow:hidden;
									height:405px;
								}
								
								img.art-img{
									width:100%;
								}
								
								@media(max-width:1063px){
									img.art-img{
										width:100%;
										margin-top:-60px;
									}
									
									div.art-posts{
										padding: 10px 10px 60px 10px;
										margin:0px;
									}
								}
								
								@media(max-width:763px){
									img.art-img{
										width:130%;
										margin-left:-30%;
									}
									
								}
								
								@media(max-width:576px){
									article.art-body h2{
										font-size:21px;
									}
								}
								
								@media(max-width:463px){
									img.art-img{
										width:180%;
										margin-left:-56%;
									}
									
									section.header-image{
										overflow:hidden;
										height:365px;
									}
									
									div.format-auto{
										margin-left:-15px;
									}
		
								}
								
							</style>
		<?php if(has_post_thumbnail(get_the_ID())):?>
    		<section class = "header-image">
    			<img class = "art-img" src = "<?php echo get_the_post_thumbnail_url( get_the_ID());?>" alt = "#"/>
      		</section>
		<?php else:?>
			<style scoped>
				section.no-image{
					height:99px;
					width:100%;
				}
			</style>
			<section class = "no-image">
      		</section>
		<?php endif;?>
      		<div class = "art-content">
      			<article class = "art-body">
      				<h1 class = "art-header"><?php the_title();?></h1>
					<div class  = "format-auto">
						<?php echo wpautop(get_post_field('post_content',get_the_ID()));?>
					</div>
						<hr>
						<div class = "edit-person">
						<?php edit_post_link( __( 'Edit Property Post', 'houseandhomerealty' ), '<span class="edit-link">', '</span>' ); ?>
					</div>
      			</article>
      		</div>
      			<div class = "inline-back-links">
      			<style scoped>
						div.view-prop-lst{
							background-image:url("<?php bloginfo('template_url');?>/imgs/left-arrow.png");
						}
						div.back-to-listings-page{
							background-image:url("<?php bloginfo('template_url');?>/imgs/right-arrow.png");
						}
				</style>
      				<?php if(metadata_exists('post',get_the_ID(),'property link')):?>
      					<a href = "<?php echo get_post_meta(get_the_ID(),'property link',true);?>" target="_blank">
							<div class = "back-to-listings-page">
								<p class = "back-label">View Property</p>
							</div>
						</a>
					<?php endif;?>
					<a href = "<?php echo get_page_link(74);?>">
						<div class = "view-prop-lst">
							<p class = "prop-label">Back</p>
						</div>
					</a>
				</div>
      		<div class = "pagination-contain">
				<div class = "inline-pgn-links">
					<div class = "next-link">
      					<?php previous_post_link('%link', 'Next Article' , in_same_cat, 'excluded_categories '); ?>
      				</div>
      				<div class = "previous-link">
						<?php next_post_link('%link', 'Last Article', in_same_cat, 'excluded_categories '); ?>	
					</div>
				</div>	
      		</div>
    	</section>
</section>
</div>
</div>
<?php get_footer();?>