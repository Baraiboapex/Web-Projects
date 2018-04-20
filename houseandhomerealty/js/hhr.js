/*

	| Contents: |
	================================
	

*/
$(document).ready(function(){
//=======>Size the page according to the size of the screen using the function below<===//
resize();
//==================================================
//-------Nav Bar-----------//

/*
	Use code like this to create a drop-down nav bar!
=========================================================

$(".dd-menu").hide();

var isDown = false;

$(".dd-activate").mouseenter(function(){
	if(window.outerWidth <= 563){
		$(".dd-activate").css({
			"padding-bottom":"35px",
			"border-bottom":"2px solid #185F91"
		});
	}
	$(".dd-menu").slideDown(200);
});	
	
$(".dd-menu").mouseleave(function(){
	if(window.outerWidth <= 563){
		$(".dd-activate").css({
			"padding-bottom":"25px",
			"border-bottom":"0px"
		});
	}
	$(this).slideUp(200);
});

=========================================================
*/
//-------Nav Bar-----------//



//------- Home Page -------//
	
	
		
//------- Home Page -------//


 
//------- About Page -------//
	
	$('div.sharedaddy.sd-sharing-enabled').remove();
	$('.attachment-post-thumbnail').removeClass('size-post-thumbnail wp-post-image attachment-post-thumbnail');
	$('a.post-edit-link').css({
		"padding":"0px",
		"border":"0px"
	});
//------- About Page -------//



//------- News And Listings Page -------//

$('.hide-show-search').hide();
$('.hide-if-small').show();
	
//====> screen resizing detection for news and listings page<===//
 document.getElementsByTagName('BODY')[0].onresize = function(){resize(); sizeGalImgs();};
//====> screen resizing detection for news and listings page<===//
	
//======> hover detection for links on news and listings pages child nav bar<====//
 $("ul#menu-posts-child-nav li").hover(function(){
 	var getId = $(this).attr("id");
 	$("#"+getId).children("a").css({
 		"border-bottom":"3px solid #185F91"
 	});
 },function(){
 	var getId = $(this).attr("id");
 	$("#"+getId).children("a").css({
 		"border-bottom":"none"
 	});
 });	
 //======> hover detection for links on news and listings pages child nav bar<====//
 $('div.hide-show-search .search-posts').append('<button class = "drop-down-btn"></button>');
if(window.outerWidth >= 576){
 	searchMenBtn();
 	$('.hide-show-search').hide();
	$('.hide-if-small').show();
}else{
	searchMenBtn();
	$('.hide-if-small').hide();
	$('.hide-show-search').show();
}
//adjust the bottom padding of the page
	
	$('section#news-and-prop-posts div.row').css({
		"padding-bottom":"64px"
	});
	
	
//------- News And Listings Page -------//

//------- Other Functions --------//

$(window).scroll(function(){
		 var scrollY = $(window).scrollTop();
		 	if(canSnap === true){
 				if(scrollY >= 99){
 					$('#static').css({"margin" : "-100px 0 0 0 "});
 				} else {
 					$('#static').css({"margin" : "auto "});
 				}
 			}
	 });


	var isDown = false;
 
$(".drop-down-btn").click(function(){
		if(isDown === false){
			$("div.hide-show-search").animate({height:"622px"},500);
			isDown = true;
		} else {
			$("div.hide-show-search").animate({height:"280px"},500);
			isDown = false;
		}
	});
});


//------- Other Functions --------//


//=================================================

//--------Functions-------//

//===> News And Listigs External Functions----------------------
	$('input.search-text').removeAttr('value');

	//--Global variables for functions--//
	
	/*-global-(resize-func)*/
	var canSnap = false;

	/*-global-(colStatPostMen-func,searchMenBtn-func)*/
	var hasRecPost = $('div.hide-show-search div.recent-posts').length;

	//--Global variables for functions--//

	function resize(){
		var colStat = true;
		
		if(window.outerWidth <= 576){
			canSnap = false;
			colStat = true;
			colStatPostMen(colStat);
			searchMenBtn();
			sizeGalImgs();
			$('.hide-show-search').show();
			$('.hide-if-small').hide();
			$("#news-and-prop-posts .row .col-sm-5").insertBefore("#news-and-prop-posts .row .col-sm-7");
			$("#static").hide();
		} else {
			canSnap = true;
			colStat = false;
			colStatPostMen(colStat);
			searchMenBtn();
			sizeGalImgs();
			$('.hide-show-search').hide();
			$('.hide-if-small').show();
			$("#news-and-prop-posts .row .col-sm-5").insertAfter("#news-and-prop-posts .row .col-sm-7");
			$('#static').show();
		}
		
	}
	 
	function colStatPostMen(canCol){
		var getulpar = $("#listings-nav ul").parent();
		if(canCol === true){
			$("#static").css({
				"height":"280px",
				"overflow":"hidden",
				"background-color":"white",
				"margin-top":"45px"
			});
			
			if(hasRecPost > 0){
			$("div.hide-show-search").css({
				"height":"280px",
				"overflow":"hidden",
				"background-color":"white",
			});
			} else {
			$("div.hide-show-search").css({
				"height":"230px",
				"overflow":"hidden",
				"background-color":"white",
			});
			}
			
			$(".search-posts").css({
				"margin-top":"5px",
			});
		} else {
			$("#static").css({
				"position":"fixed",
				"height":"auto",
				"background-color":"#ededed",
				"overflow":"visible",
				"margin-top":"auto"
			});
			$(".search-posts").css({
				"margin-top":"30px"
			});
		}	
	}

	function sizeGalImgs(){
		var lgi = $('div.format-auto img.size-full');
		if(window.outerWidth < 640){
		   lgi.css({
			   "width":"303px",
			   "height":"227px"
		   });
		} else {
			lgi.css({
			   "width":"605px",
			   "height":"454px"
		   });
		}
	}

	function searchMenBtn(){
		if(window.outerWidth <= 576 && hasRecPost > 0){
			$(".drop-down-btn").show();
			$(".drop-down-btn").css({
				"margin-top":"51px"
			});
		} else {
			$(".drop-down-btn").hide();
			$(".drop-down-btn").css({
				"margin-top":"0px"
			});
		}		
	}
	

//===> News And Listigs External Functions-----------------------

//--------Functions-------//

//=================================================


//--------------Dynamic JS/JQuery Code Section------------//
	
	//=======Home Page Code =======//
		$('label.wpforms-field-label').append('<span class = "req-ast">*Required</span>');
		
		$('div#wpforms-126-field_5-container').children('label.wpforms-field-label').remove();

		$('div#wpform-field-hp').remove();

		$('ul#wpforms-126-field_5').wrap('<div class="add-border"></div>');
		$('div.add-border').css({
			"border":"5px solid #185F91",
			"border-radius":"30px",
			"width":"80%",
			"padding":"30px 0 30px 0"
		}).wrap('<center></center>');
	//=======Home Page Code =======//

	//=======>Navbar Code<=========//
		
			$('#menu-top-nav').addClass('pos-nav navbar-nav mr-auto');
			$('.menu-top-nav-container').addClass('nav-pos-fix');
			$('#menu-top-nav').removeClass('menu');
			$('#menu-top-nav li').addClass('nav-item');
			$('.nav-pos-fix .pos-nav .nav-item a').addClass('nav-link');
			
	//=======>Navbar Code<=========//
	
	
	
	//=======>About Page Code<=====//
		
		
		
	//=======>About Page Code<=====//
	
	
	
	//=======>News And Listings<=====//
		//Make all article images responsive
			$('div.article-image img').addClass('img-responsive')
		//----> Get Page Widgets Set Up

		//Set Up Child Nav Bar
		$('li#menu-item-409 a').attr('id','to-prop-page');
		$('li#menu-item-410 a').attr('id','to-news-page');
		
		//Set Up Search Widget
		$('.screen-reader-text').remove();
		$('form.search-form').addClass('search');
		$('.search-field').addClass('search-txt');
		$('.search-submit').addClass('submit-search-form');
		$('.search-txt').removeClass('search-field');
		$('.submit-search-form').removeClass('search-submit');
		$('.search').removeClass('search-form');
		$('input.search-txt').unwrap('label');
		$('input.search-txt').wrap('<div class = "contain-txt"></div>');
		$('.search-txt').attr('placeholder','Search...');

		//Set Up Recently Added Posts
		$('span.post-date').addClass('p-date-span');
		$('span.p-date-span').removeClass('post-date');
		$('.recent-posts ul li a').addClass('new-post');
		
		var ii = 0;
		
		$('a.new-post').each(function(){
			ii++;
			$(this).attr('id','date-'+ii);
		});
		
		$('.recent-posts ul').wrap('<div class = "recent-posts-content"></div>');
		//----> Get Page Widgets Set Up
	//=======>News And Listings<=====//	
	
	
	
	//=======>Individual Articles<===//
	$('div.next-link a').wrap('<div class = "pgn-next"></div>');
	$('div.previous-link a').wrap('<div class = "pgn-prev"></div>');
	$('ul#wpforms-126-field_5').wrap('<center></center>');
	$('div.wpforms-submit-container').wrap('<center></center>');
	//=======>Individual Articles<===//	
	

//--------------Dynamic JS/JQuery Cose Section------------// 