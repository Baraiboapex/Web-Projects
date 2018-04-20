<?php wp_head();?>
<?php if(is_page(74)){
	delete_transient('category');
	set_transient('category','listings');
} else if(is_page(76)){
	delete_transient('category');
	set_transient('category','news');
} ?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			House and Home |
			<?php
			if(is_front_page()){
				echo "Home";
			} else {
				the_title(); 	
			}
			?>
		</title>
		<meta charset = "UTF-8"/>
		<link rel  = "stylesheet" href = "<?php bloginfo('template_url');?>/style.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<nav class="navbar navbar-expand-md navbar-light fixed-top ">
		<?php
		
		$hhr_logo = get_theme_mod('hhr_logo');
			
		if(empty($logo)):?>
			<script>
				//document.getElementsByClassName('nav-title').style.visibility = "visible";
			</script>
				
		<?php endif; ?>
			<script>
				//document.getElementsByClassName('nav-title').style.visibility = "hidden";
			</script>
			<style scoped>
				.head-image{
					background-image:url('<?php echo $hhr_logo; ?>');
				}
			</style>
			
  	  <a href = "<?php echo get_page_link(4); ?>">
      <div class = "head-image">
      </div>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <?php  
        	$location = array(
        		'theme_location' => 'header'
        	);
        	wp_nav_menu($location);
        ?>
      </div>
    </nav>