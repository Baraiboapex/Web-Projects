<?php get_header();?>
	    <section id = "header">
	    <?php	$hhr_about_head_img = get_theme_mod('hhr_about_header');
	if(!empty($hhr_about_head_img)):?>
		<style scoped >
			#about-header-image{
				background-image:url('<?php echo $hhr_about_head_img; ?>');
			}
		</style>
	<?php endif; ?>
		<style scoped >
			#about-header-image{
				background-color:#185F91;
			}
		</style>
    <section id = "about-header-image" class = "header-image">
    <div class = "contain-welcome-message">
     <center>
     	<?php dynamic_sidebar('aboutpagegreeting');?>
     </center>
     </div>
    </section>
    </section><!--.header-->
	<section class = "content">
		<section id = "about-intro">
			<article id = "about-intro-art">
				<h1 id = "about-intro-head"><?php the_title(); ?></h1>
				<p id = "about-intro-content">
					<?php echo wpautop(get_post_field('post_content',get_the_ID()));?>
				</p>
			</article>
			<div class="meet-team-container">
			<div class = "move-right">
				<a id = "meet-the-team-link" href = "#show-team">
					<style>
						div#meet-the-team-btn{
							height:60px;
							width:60px;
							background-color:#185F91;
							border-radius:100%;
							background-image:url("<?php bloginfo('template_url');?>/imgs/down-arrow.png");
							background-repeat:no-repeat;
							background-size:70%;
							background-position: 9px 17px;
						}
					</style>
					<div id = "meet-the-team-btn">
						<p>Meet The Team</p>
					</div>
				</a>
			</div>
			</div>
		</section><!--.about-intro-->
		<section id = "show-team">
		<section class = "team_members">
			<?php get_template_part('templates/teammembers');?>
		</section><!--.team-members-->
		</section><!--.show-team-->
	</section><!--.content-->
<?php get_footer();?>