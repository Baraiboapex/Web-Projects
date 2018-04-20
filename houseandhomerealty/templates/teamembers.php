<?php get_header();?>
<?php
	$team = array(
		'category_name' => 'teammembers',
		'order' => 'ASC'
	);
	$team_q = new WP_Query($team);
?>
<?php if($team_q->have_posts()):?>
<?php while($team_q->have_posts()): $team_q->the_post();?>
<div class = "team-member">
			<div class = "row">
				<div class = "col-sm-7">
					<div class = " fix-col row" >
					<div class = "t-img">
						<?php if(has_post_thumbnail(get_the_ID())):?>
							<?php echo the_post_thumbnail();?>
						<?php endif;?>
					</div>
					<div class = "col-sm-6">
					<div class = "pers-info">
					<h4 class = "person-name"><?php the_title(); ?></h4>
					<p class = "t-inf">
						<?php echo wpautop(get_post_field('post_content',get_the_ID()));?>
					</p><!--.t-inf-->
					</div>
					</div>
					</div>
					<div class = "pos-edit-link">
					<div class = "edit-person">
						<?php edit_post_link( __( 'Edit Person Info', 'houseandhomerealty' ), '<span class="edit-link">', '</span>' ); ?>
					</div>
					</div>
				</div><!--.col-sm-6-->
				<div class = "col-sm-5 add-border-left add-border-resp-top">
				<center>
					<img class = "epic" src = "<?php bloginfo('template_url');?>/imgs/mail_an_phone-01.png" alt = "#"/>
					<h5>Email:</h5>
					<p class = "t-inf">
						<?php echo get_post_meta(get_the_ID(),'email',true);?>
					</p><!--.t-inf-->
					<img class = "ppic" src = "<?php bloginfo('template_url');?>/imgs/mail_an_phone-02.png" alt = "#"/>
					<h5>Phone:</h5>
					<p class = "t-inf">
						<?php echo get_post_meta(get_the_ID(),'phone',true);?>
					</p><!--.t-inf-->
				</center>
			</div><!--.col-sm-6-->
		</div><!--.row-->
</div><!--.team-member-->
<?php endwhile;  wp_reset_postdata();?>
<?php endif; ?>
<?php get_footer();?>
<?php get_footer();?>