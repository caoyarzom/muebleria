$(function () {
//////////////////////////////////////////////////////////////////////////
////// START - CODE FOR LOADING THE TOP MENU CHASING BAR
//////////////////////////////////////////////////////////////////////////

	var $doc = $(document), $win = $(window), $chaser, $forch,
		forchBottom, visible;
	function shown() {
		visible = true;
	}
	function hidden() {
		visible = false;
	}
	$chaser = $('#header ul.menu').clone().hide().appendTo(document.body).wrap("<div class='chaser'></div>");
	$forch = $('.forchaser').first();
	forchBottom = $forch.height() + $forch.offset().top;
	hidden();
	$win.bind('scroll', function () {
		var top = $doc.scrollTop();
		if (!visible && top > forchBottom) {
			$chaser.slideDown(300, shown);
		} else if (visible && top < forchBottom) {
			$chaser.slideUp(200, hidden);
		}
	});

	
//////////////////////////////////////////////////////////////////////////
// LOAD DATA INTO THE CURRENT-DATE DIV
//////////////////////////////////////////////////////////////////////////
	$.ajax({
	  url: "php-includes/date.php",
	  success: function(data){
		$("#current-date").html(data);
	  }
	});

});


$(window).load(function() {
//////////////////////////////////////////////////////////////////////////
// SOCIAL ICONS SMALL SLIDER
//////////////////////////////////////////////////////////////////////////
	$('li.social-icons > a').click(function() {
		var $t = $(this).next();
		if($(this).hasClass('opened')) {
			$t.parent().animate({width:$(this).width()+'px'}, 300, 'easeOutExpo');
			$(this).removeClass('opened');
		}else{
			$t.parent().animate({width:($t.find('.inner').outerWidth()+$(this).width())+'px'}, 300, 'easeOutExpo');
			$(this).addClass('opened');
		}
	});


//////////////////////////////////////////////////////////////////////////	
// SEARCH FIELD SMALL SLIDER
//////////////////////////////////////////////////////////////////////////
	$('li.search-box > a').click(function() {
		var $t = $(this).next();
		if($(this).hasClass('opened')) {
			$t.parent().animate({width:$(this).width()+'px'}, 300, 'easeOutExpo');
			$(this).removeClass('opened');
		}else{
			$t.parent().animate({width:($t.find('input[type=text]').outerWidth()+$(this).width())+'px'}, 300, 'easeOutExpo');
			$(this).addClass('opened');
		}
	});


//////////////////////////////////////////////////////////////////////////
// REMOVE MARGIN BOTTOM FROM EACH LAST PARAGRAF
//////////////////////////////////////////////////////////////////////////
	//$('body').find('p:last-child').css('margin-bottom',0);
	

//////////////////////////////////////////////////////////////////////////
// INSERT SHADOW UNDER IMAGES HAVING
//////////////////////////////////////////////////////////////////////////
	$('img.with-shadow-1').each(function() {
		$(this).wrap('<div class="block-img-shadow" />');
		$('<div class="under-shadow"><img src="php-includes/img.php?src=../images/image_shadows/shadow01.png&amp;w='+$(this).width()+'" alt="" /></div>').insertAfter(this);
	});
	$('img.with-shadow-2').each(function() {
		$(this).wrap('<div class="block-img-shadow" />');
		$('<div class="under-shadow"><img src="php-includes/img.php?src=../images/image_shadows/shadow02.png&amp;w='+$(this).width()+'" alt="" /></div>').insertAfter(this);
	});
	$('img.with-shadow-3').each(function() {
		$(this).wrap('<div class="block-img-shadow" />');
		$('<div class="under-shadow"><img src="php-includes/img.php?src=../images/image_shadows/shadow03.png&amp;w='+$(this).width()+'" alt="" /></div>').insertAfter(this);
	});
	$('img.with-shadow-4').each(function() {
		$(this).wrap('<div class="block-img-shadow" />');
		$('<div class="under-shadow"><img src="php-includes/img.php?src=../images/image_shadows/shadow04.png&amp;w='+$(this).width()+'" alt="" /></div>').insertAfter(this);
	});
	
	
	$('.head-image').each(function() {
		$(this).parent().append('<span class="zoom-overlay"></span>');
	});
	

//////////////////////////////////////////////////////////////////////////
// SWAPPERS FROM SLIDESHOW
//////////////////////////////////////////////////////////////////////////
	var sp = 300;
	$('#swappers div.swapper').hover(
		function() {
			$(this).stop().animate({top:'-180px'}, {queue: false, duration: sp, easing: "easeOutExpo"});
			$(this).find('.bgr').stop().animate({'opacity':0.9}, {queue: false, duration: sp, easing: "easeOutExpo"});
			$(this).find('p').stop().animate({'opacity':1}, {queue: false, duration: sp, easing: "easeOutExpo"});
			$(this).find('.indicator').css('background-position','center top');
		},
		function() {
			$(this).stop().animate({top:'0px'}, {queue: false, duration: sp, easing: "easeOutExpo"});
			$(this).find('.bgr').stop().animate({'opacity':0.5}, {queue: false, duration: sp, easing: "easeOutExpo"});
			$(this).find('p').stop().animate({'opacity':0.5}, {queue: false, duration: sp, easing: "easeOutExpo"});
			$(this).find('.indicator').css('background-position','center bottom');
		}
	);


//////////////////////////////////////////////////////////////////////////
// ADD A LAST CLASS TO DIFFERENT ELEMENTS TO REMOVE MARGINS/PADDINGS
//////////////////////////////////////////////////////////////////////////
	$("#flickr_container li:nth-child(3n)").addClass("last");
	$(".small_ads li:nth-child(2n)").addClass("last");
	$(".projects .items li:nth-child(4n)").addClass("last");
	


//////////////////////////////////////////////////////////////////////////	
// LIVE COMMENTS OPENER
//////////////////////////////////////////////////////////////////////////
	$('.live-comments .opener').click(function(e) {
		e.preventDefault();
		var $t = $(this).next();
		if($t.hasClass('opened')) {
			$(this).removeClass('active');
			$t.removeClass('opened');
		}else{
			$(this).addClass('active');
			$t.addClass('opened');
		}
	})

	
//////////////////////////////////////////////////////////////////////////	
// TRIGGER TO SHOW THE HIDDEN MAP
//////////////////////////////////////////////////////////////////////////
	$('.map_link').click(function(e) {
		e.preventDefault();
		var $m = $('.hidden-map-wrapper');
		if($m.hasClass('opened')) {
			$m.stop().animate({height:0}, {queue: false, duration: 300, easing: "easeOutExpo"});
			$m.removeClass('opened');
		}else{
			$m.stop().animate({height:'350px'}, {queue: false, duration: 300, easing: "easeOutExpo"});
			$('html, body').animate({scrollTop: '5000px'}, 300,'easeOutExpo');
			$m.addClass('opened');
		}
	})
	$('.close-map').click(function(e) {
		e.preventDefault();
		var $m = $('.hidden-map-wrapper');
		$m.stop().animate({height:0}, {queue: false, duration: 300, easing: "easeOutExpo"});
		$m.removeClass('opened');
	})


//////////////////////////////////////////////////////////////////////////
//INITIALIZE THE SUPERFISH MENU
//////////////////////////////////////////////////////////////////////////
	$(function($){ $("ul.sf-menu").supersubs({minWidth:13, maxWidth:30, extraWidth:0}).superfish({hoverClass:'sfHover', pathClass:'sf-active', pathLevels:0, delay:500, animation:{height:'show'}, speed:'def', autoArrows:1, dropShadows:0}) });


//////////////////////////////////////////////////////////////////////////
// INIT COLORBOX
//////////////////////////////////////////////////////////////////////////
	$("a[rel='colorbox']").colorbox();
	


//////////////////////////////////////////////////////////////////////////	
// INIT INFIELD LABELS
//////////////////////////////////////////////////////////////////////////
	$("#newsletter-form label, .infield label").inFieldLabels();


//////////////////////////////////////////////////////////////////////////	
// TWITTER LOADER
//////////////////////////////////////////////////////////////////////////
	$("#twitter").getTwitter({
		// change here the Twitter username
		userName: "envato",
		numTweets: 1,
		loaderText: "Loading tweets...",
		slideIn: false,
		showHeading: true,
		headingText: "Latest Tweets",
		showProfileLink: true
	});


//////////////////////////////////////////////////////////////////////////
// LOAD TESTIMONIALS FADE TRANSITIONS
//////////////////////////////////////////////////////////////////////////
	$('#testimonials blockquote').quovolver();
	
//////////////////////////////////////////////////////////////////////////	
// ADD THE TRIGGER OF THE TOOLTIPS
//////////////////////////////////////////////////////////////////////////
	$(".hasTip").tipTip();


//////////////////////////////////////////////////////////////////////////	
// ACCORDION - Tutorial by Soh Tanaka - http://www.sohtanaka.com/web-design/easy-toggle-jquery-tutorial/
//////////////////////////////////////////////////////////////////////////	

$('.acc_container').hide(); //Hide/close all containers

// if you want to show the first div uncomment the line below  <-- read this
//Add "active" class to first trigger, then show/open the immediate next container
//$('.acc_trigger:first').addClass('active').next().show(); 

$('.acc_trigger').click(function(e){
	if( $(this).next().is(':hidden') ) { //If immediate next container is closed...
		$('.acc_trigger').removeClass('active').next().slideUp(); //Remove all "active" state and slide up the immediate next container
		$(this).toggleClass('active').next().slideDown(); //Add "active" state to clicked trigger and slide down the immediate next container
	} else {
		$('.acc_trigger').removeClass('active').next().slideUp(); //Remove all "active" state and slide up the immediate next container
	}
	e.preventDefault(); //Prevent the browser jump to the link anchor
});


//////////////////////////////////////////////////////////////////////////	
// SIMPLE TABS - Tutorial by Soh Tanaka - http://www.sohtanaka.com/web-design/simple-tabs-w-css-jquery/
//////////////////////////////////////////////////////////////////////////	

	$("#simple-tabs .tab_content").hide(); //Hide all content
	$("#simple-tabs ul.tabs li:first").addClass("active").show(); //Activate first tab
	$("#simple-tabs .tab_content:first").show(); //Show first tab content
	
	//On Click Event
	$("#simple-tabs ul.tabs li").click(function(e) {
		$("#simple-tabs ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$("#simple-tabs .tab_content").hide(); //Hide all tab content
		var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active content
		e.preventDefault();
	});

//////////////////////////////////////////////////////////////////////////	
// TOGGLES - Tutorial by Soh Tanaka - http://www.sohtanaka.com/web-design/easy-toggle-jquery-tutorial/
//////////////////////////////////////////////////////////////////////////	

	//Hide (Collapse) the toggle containers on load
	$(".toggle_container").hide(); 

	//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
	$(".tgg-trigger").click(function(){
		$(this).toggleClass("active").next().slideToggle("slow");
		return false; //Prevent the browser jump to the link anchor
	});
	
	
//////////////////////////////////////////////////////////////////////////	
// ADD ODD CLASS TO ROWS
//////////////////////////////////////////////////////////////////////////	
	
	$(".zebra-style tr:odd, .faq-style .tgg-trigger:odd").addClass("odd");


})// end of window load


//////////////////////////////////////////////////////////////////////////
// HIDDEN MAP FUNCTION
//////////////////////////////////////////////////////////////////////////
	function loadHiddenMap() {
	
	// change this coordinates latitude,longitude - use this tool to get coordinates http://itouchmap.com/latlong.html
	var point = new google.maps.LatLng(-33.481395,-70.642863);

	var myMapOptions = {
		scrollwheel:false,
		zoom: 15,
		center: point,
		mapTypeControl: true,
		mapTypeControlOptions: {
			style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
        	position: google.maps.ControlPosition.RIGHT_CENTER },
		navigationControl: true,
		navigationControlOptions: {
			style: google.maps.NavigationControlStyle.SMALL,
        	position: google.maps.ControlPosition.LEFT_CENTER},
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	
	var map = new google.maps.Map(document.getElementById('hidden_map'),myMapOptions);
	
	var image = new google.maps.MarkerImage(
	  'images/marker-images/image.png',
	  new google.maps.Size(188,68),
	  new google.maps.Point(0,0),
	  new google.maps.Point(0,68)
	);
	
	var shadow = new google.maps.MarkerImage(
	  'images/marker-images/shadow.png',
	  new google.maps.Size(217,68),
	  new google.maps.Point(0,0),
	  new google.maps.Point(0,68)
	);
	
	var shape = {
	  coord: [69,0,80,1,84,2,87,3,90,4,93,5,96,6,98,7,100,8,102,9,104,10,105,11,107,12,108,13,110,14,111,15,112,16,113,17,115,18,115,19,117,20,118,21,119,22,120,23,121,24,122,25,123,26,124,27,124,28,125,29,126,30,127,31,127,32,128,33,129,34,129,35,130,36,130,37,131,38,131,39,132,40,132,41,133,42,133,43,133,44,134,45,134,46,135,47,135,48,135,49,136,50,136,51,136,52,136,53,136,54,137,55,137,56,137,57,137,58,137,59,138,60,138,61,138,62,138,63,138,64,138,65,138,66,138,67,138,68,138,69,138,70,138,71,138,72,139,73,139,74,138,75,139,76,139,77,139,78,139,79,138,80,138,81,138,82,138,83,137,84,137,85,137,86,137,87,137,88,136,89,136,90,136,91,135,92,135,93,135,94,134,95,134,96,133,97,133,98,132,99,132,100,131,101,131,102,130,103,130,104,129,105,128,106,128,107,127,108,127,109,126,110,125,111,124,112,124,113,123,114,122,115,122,116,121,117,120,118,119,119,118,120,117,121,116,122,115,123,114,124,113,125,112,126,110,127,109,128,107,129,106,130,103,131,102,132,100,133,99,134,96,135,93,136,89,137,86,138,83,139,79,140,78,141,77,142,76,143,75,144,75,145,74,146,73,147,72,148,71,149,70,150,70,151,70,152,68,152,67,151,67,150,66,149,65,148,64,147,64,146,63,145,62,144,61,143,60,142,60,141,59,140,56,139,52,138,47,137,45,136,43,135,41,134,39,133,37,132,35,131,33,130,32,129,30,128,29,127,28,126,26,125,26,124,24,123,23,122,22,121,21,120,20,119,18,118,18,117,17,116,16,115,15,114,14,113,13,112,13,111,12,110,11,109,11,108,10,107,10,106,9,105,8,104,8,103,7,102,7,101,7,100,6,99,6,98,5,97,5,96,5,95,4,94,4,93,4,92,3,91,3,90,3,89,2,88,2,87,2,86,2,85,2,84,2,83,1,82,1,81,1,80,0,79,0,78,0,77,0,76,0,75,0,74,0,73,0,72,0,71,0,70,0,69,0,68,0,67,0,66,0,65,0,64,0,63,0,62,1,61,1,60,1,59,1,58,1,57,2,56,2,55,2,54,3,53,3,52,3,51,3,50,4,49,4,48,4,47,5,46,5,45,6,44,6,43,7,42,7,41,8,40,8,39,9,38,9,37,10,36,10,35,11,34,11,33,12,32,13,31,14,30,14,29,15,28,16,27,17,26,17,25,18,24,19,23,20,22,21,21,21,20,22,19,24,18,25,17,26,16,27,15,29,14,30,13,31,12,33,11,35,10,36,9,39,8,41,7,43,6,45,5,49,4,53,3,56,2,65,1,69,0,69,0],
	  type: 'poly'
	};
	
	var marker = new google.maps.Marker({
		draggable:true,
		raiseOnDrag: false,
		icon: image,
		shadow: shadow,
		shape: shape,
		map: map,
		position: point
		
	});
};