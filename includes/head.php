<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Ibiza Tours - Car Rental</title>
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/main.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" href="css/responsive.css" type="text/css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" >

<link rel="apple-touch-icon" href="apple-touch-icon.png"/>

<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>


<!--slider-->
<link rel="stylesheet" href="slider/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="slider/nivo-slider.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="slider/jquery.nivo.slider.js"></script> 
<script type="text/javascript">
    $(window).load(function() {
        $('#slider,#slider2,#port-slider').nivoSlider();
    });
</script> 
<!--!Fin slider-->

<!--menu responsive-->
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
<!--script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script-->
<script src="slicknav/jquery.slicknav.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	$('#menu2').slicknav();
	});
</script>
<link rel="stylesheet" href="slicknav/slicknav.css">

<script type="text/javascript">
$(window).scroll(function(){

  var scroll = $(window).scrollTop();

  if (scroll > 0 ) {
    $('header').addClass('scrolled');
  }

  if (scroll <= 0 ) {
    $('header').removeClass('scrolled');
 }

}); 
</script>

<!--Tab vertical-->
<script src="tab/ScriptResource.axd" type="text/javascript"></script>
<script type="text/javascript" src="js/leap-bundle.min.js"></script>
<!--Fin Tab vertical-->
</head>