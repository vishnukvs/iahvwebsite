<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>IAHV Australia </title>
	<meta name="keywords" content="IAHV Peace " />
	<meta name="description" content="" />
	<link rel="Shortcut Icon" type="image/ico" href="imgs/favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- CSS ______________________________________-->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/magnificpopup.css" >
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.min.css">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/master.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/colors-passion-red.css"  />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	
    <!-- Javascripts ______________________________________-->
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
		<!-- include Easing -->
	 <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.easing.js"></script> 
		<!-- include Cycle -->
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.cycle.all.js"></script> 
		<!-- include jCarousel -->
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.jcarousel.min.js"></script> 
		<!-- include image popups -->
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.magnific-popup.min.js"></script> 
		<!-- include mobile menu -->
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.mobilemenu.js"></script> 
		<!-- include custom script -->
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/scripts.js"></script>

	<!-- Fixing Internet Explorer ______________________________________-->
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<link rel="stylesheet" href="css/ie.css" />
	<![endif]-->

	<!--[if IE 7]>
		<link rel="stylesheet" href="css/ie7.css" />
		<link rel="stylesheet" href="css/font-awesome-ie7.min.css">
	<![endif]-->
</head> 
<body class="home">
<div id="wrapperbox">
	<?php $this->renderPartial('//layouts/_header'); ?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<?php $this->renderPartial('//layouts/_footer');?>
</body>
</html>



