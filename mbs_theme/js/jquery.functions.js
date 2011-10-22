$(document).ready(function() {
	
		///////////////////////////////////////////////////////////////////////////// home page cycle efx
	  $('.slideshow').hide().fadeIn(2200);
	  $('.slideshow').cycle({
	     fx: 'fade',
	     timeout: 2500,
	     speed: 2500
	   });
  	
		$("#content ul li a").not("a[href^='http://']").fancybox({
    'titlePosition'	: 'inside',
		'transitionIn'	: 'fade',
		'transitionOut'	: 'fade',
		'speedIn'				:	600, 
		'speedOut'			:	10, 
		'overlayShow'		:	true,
		'hideOnContentClick' : true
	});
	
		$('a.options').fancybox({
    'titlePosition'	: 'inside',
		'transitionIn'	: 'elastic',
		'transitionOut'	: 'elastic',
		'speedIn'				:	600, 
		'speedOut'			:	10, 
		'overlayShow'		:	true,
		'hideOnContentClick' : false
	});
	
		$('#disclaimer a').fancybox({
    'titlePosition'	: 'inside',
		'transitionIn'	: 'elastic',
		'transitionOut'	: 'elastic',
		'speedIn'				:	600, 
		'speedOut'			:	10, 
		'overlayShow'		:	true,
		'hideOnContentClick' : false
	});		

 /*
 $('a[href^="http://"], a.[href$=".pdf"]').live("click", function() {
      window.open( $(this).attr('href') );
      return false;
  });
*/
  
/*
  $('div.description').each(function() { // "this" is each element in the wrapper set
    var background = $(this).attr('title');
    $(this).css({ 'background-image':'url(/images/c_logos/' + background + '.png)' });
    // alert( background ); // Could also be written: alert(this.id);
  });  
*/

	// control content ul li margin
	$('#content ul li:nth-child(3n+3)').css('margin-right', 0);
	
	$(".navigation a[href^='#']").click(function(event) {
		event.preventDefault();
		$(this).next().slideToggle('slow');
	});
	
  $(".navigation ul.sub a[href^='#']").click(function(event) {
    event.preventDefault();
    $(this).toggleClass('selected');
  });

  $('li:has(a.level-one)').css({ backgroundColor: '#2F1E14' });
  
  $(".navigation li a.level-one").toggle(function() {
    $(this).parent().animate({ backgroundColor: '#FFF'}, 1000);
    $(this).addClass('selected');    
    },
    function() {
    $(this).parent().animate({ backgroundColor: '#2F1E14'}, 1000);
    $(this).removeClass('selected');
  });
  
  // expand navigation 
  var levelone = jQuery.url.segment(0);
  if ( levelone == 'products' ) {
    $(".navigation a[href^='#']").eq(0).click();
  }
  if ( levelone == 'gallery' ) {
    $(".navigation a[href^='#']").eq(4).click();
  }
  
  var section = $.url.param("s");
  if ( section == 'collection-brick' ) {
    $(".navigation ul.sub a[href^='#']").eq(0).click();
  }
  
  if ( section == 'brick-manufacturers' ) {
    $(".navigation ul.sub a[href^='#']").eq(0).click();
  }  
  
  if ( section == 'collection-naturalstone' ) {
    $(".navigation ul.sub a[href^='#']").eq(1).click();        
    setTimeout(function() { 
      $(".navigation ul.sub a[href^='#']").eq(2).click();
      }, 700);
  }  

  if ( section == 'naturalstone-quarries' ) {
    $(".navigation ul.sub a[href^='#']").eq(1).click();
  }  
/*

  // add "markpage"
  var addmark = jQuery.url.segment(0);
  var markpage = $.url.attr("file");
  
  if ( addmark == 'products' ||  addmark == 'gallery' ) {
    $(".navigation a[href*="+ markpage +"]").css({ color:"#2F7A8D" });
  } else { 
    $(".navigation a[href*="+ markpage +"]").addClass('selected');
  }

  if ( markpage === null ) { // is home
    $(".navigation a[href*=/]").eq(0).addClass('selected');
    // $('#wrapper').css({ backgroundImage:'none' });
    $('#header a').hide();
    
      function viewport() {
      var documentElement = document.documentElement;
      var pageWidth = window.innerWidth || self.innerWidth || (documentElement && documentElement.clientWidth) || document.body.clientWidth;
      var pageHeight = window.innerHeight || self.innerHeight || (documentElement && documentElement.clientHeight) || document.body.clientHeight;
      var pageSize = [pageWidth, pageHeight];
      // return pageSize;
      return pageSize[1];
      }
      var currentHeigh = viewport();      
      if (currentHeigh < 900 ) {
      $('#header').hide();
      }
*/

    /*
$('#contanier').css({
      'background-color': 'transparent',
      'background-image': 'url(/images/other/modern-facility.jpg)',
      'background-repeat': 'no-repeat'
      });
*/
/*
  } else {
    $('.home').hide();
  }
*/
  
	////////////////////////////////////////////////////////////////// google maps	API v3.
/*
  function initialize() {
    var latlng = new google.maps.LatLng(33.1391792, -117.181131);
    var myOptions = {
      zoom: 13,
      center: latlng,
      disableDefaultUI: false,
      mapTypeId: google.maps.MapTypeId.TERRAIN
    };
    var map = new google.maps.Map(document.getElementById("gmap"), myOptions);

    var marker = new google.maps.Marker({
        position: latlng, 
        map: map,
        title:"Modern Builders Supply"
    });   
  }
  if ( $.url.attr("file") == 'contact.php' ) { initialize(); }
*/
	
});