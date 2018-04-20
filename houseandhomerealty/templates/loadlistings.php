<?php get_header();?>
<?php
	//session_start();
	//unset($_SESSION['query']);
	
	if(isset($_GET['s'])){
		$search = htmlentities($_GET['s']);
	}

	$listings = array(
		's' => $search,
		'category_name' => 'listings'
	);
	
   // $_SESSION['query'] = $listings;
	
	$qlist = new WP_Query($listings);
?>
<?php get_footer();?>