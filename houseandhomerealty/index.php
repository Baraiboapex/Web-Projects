<?php get_header();?>
	<section id = "header">
	<?php
	$hhr_home_head_img = get_theme_mod('hhr_home_header');
	if(!empty($hhr_home_head_img)):?>
		<style scoped >
			#header-image-home{
				background-image:url('<?php echo $hhr_home_head_img; ?>');
			}
		</style>
	<?php endif; ?>
		<style scoped >
			#header-image-home{
				background-color:#185F91;
			}
		</style>
     <section id = "header-image-home" class = "header-image">
     <div class = "contain-welcome-message">
     <center>
     	<?php dynamic_sidebar('homepagegreeting');?>
     	<a href = "<?php echo get_the_permalink(74);?>">
     		<button type="button" id = "view-our-listings" class="btn">View Our Homes</button>
     	</a>
     </center>
     </div>
     </section>
     </section>
	    <section class = "content">
     	<center>
     		<?php dynamic_sidebar('whychooseus');?>
     	</center>
     	<div class = "row">
     		<div class = "col-sm-4">
     			<center>
     				<img class = "reason-image" src = "<?php bloginfo('template_url');?>/imgs/hhr_home_page_icons-01 copy.png" alt = "#"/>
     			</center>
     				<h3 class = "reason-header">First Class Customer Service</h3>
     				<p>
                       We take the time to understand a client’s needs. We focus on thorough and timely communication. 
                       We focus on customer care with well-timed purpose and perseverance.
     				</p>
     		</div>
     		<div class = "col-sm-4">
     			<center>
     				<img class = "reason-image" src = "<?php bloginfo('template_url');?>/imgs/hhr_home_page_icons-02 copy.png" alt = "#"/>
     			</center>
     				<h3 class = "reason-header">Out of the Box Marketing Approach</h3>
     				<p>
     					Through the development of strategic alliances with industry specialists, we have developed 
     					significant endorsements from the people and businesses we serve. We strive to drive traffic to 
     					targeted audience for proven results.
     				</p>
     			
     		</div>
     		<div class = "col-sm-4">
     			<center>
     				<img class = "reason-image" src = "<?php bloginfo('template_url');?>/imgs/hhr_home_page_icons-03 copy.png" alt = "#"/>
     			</center>
     				<h3 class = "reason-header">Comprehensive Personal Industry Experience</h3>
     				<p>
						With many years of experience in Real Estate, we have been in our clients’ shoes.  
						As a 1st Time Home Buyer,  Residential Seller, Seasoned Buyer, Investor to Flip, Investor to Hold, Property Manager,  Commercial Property Buyer,  Homeowner 
						Association CAM, Association Member, Association Board Member, Hard Money Lender, Wholesaler and more.
     				</p>
     		</div>
     	</div><!--.row-->
     	<div class = "contact-form">
     	<article class = "contact-head">
     	<?php dynamic_sidebar('cformhead');?>
     	</article>
     		<div class = "row">
     			<div class = "col-sm-12">
					<?php dynamic_sidebar('homecontact');?><!--.hhr-contact-form-->
     			</div><!--.col-sm-12-->
     		</div><!--.center-fix-->
     	</div><!--.contact-form-->
	 </section><!--content-->
<?php get_footer();?>