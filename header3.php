<?php include('functions.php'); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="//use.typekit.net/epy8gek.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="laurmccarthy, lauren mccarthy, lauren, mccarthy, art, body, mit">
<script type="text/javascript" src=<?php echo getRoot(); ?>javascripts/simpletreemenu.js></script>
<script type="text/javascript" src=<?php echo getRoot(); ?>javascripts/jquery-1.6.min.js></script>

<link href=<?php echo getRoot(); ?>css/stylesheet.css rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="<?php echo getRoot(); ?>css/bootstrap.css">
<script src="<?php echo getRoot(); ?>javascripts/bootstrap.min.js"></script>

<link rel="icon" type="image/x-icon" href=<?php echo getRoot(); ?>favicon.ico>

<script type="text/javascript">
$(function(){
$('.thumbnailImage').mouseenter(
        function(){
        	$(this).find('div.text').fadeIn(100);                                            
        }
);
$('.thumbnailImage').mouseleave(
        function(){	
        	$(this).find('div.text').fadeOut(100);
        }
);
});
</script>

<title>lauren mccarthy</title>
</head>


<body>

<div id="container">
  <div id="sidebar">
  <ul>
  <?php 
  	if($_SERVER['REQUEST_URI'] != '/' && $_SERVER['REQUEST_URI'] != '/index.html') {
	 	echo '<li><a href='.getRoot().'>home</a></li>';
	}
   ?>
<!--  <li><a href=<?php echo getRoot(); ?>inmotion/>inmotion</a></li>-->
  <li><a href=<?php echo getRoot(); ?>about/>about</a></li>
  <li><a href=<?php echo getRoot(); ?>contact/>contact</a></li>
  
  </ul>
  </div>