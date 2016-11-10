<?php

$siteTitle = "The Solars";

?>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> <?php echo $siteTitle."-".$pgTitle; ?> </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="stylesheet/normalize.css">
        <link rel="stylesheet" href="stylesheet/style.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

		<header class="l-header">
			<nav class="navi">
				<a>
				  <h1><?php echo $siteTitle; ?></h1>
				</a>

			  <ul class="menu">
				<li class="menu__item <?php if ($pgTitle == "Home"){ echo 'menu__item--hovered';} ?>">
					<a> Home </a>
				</li>
				<li class="menu__item <?php if ($pgTitle == "About"){ echo 'menu__item--hovered';} ?>">
					<a> About </a>
				</li>
				<li class="menu__item <?php if ($pgTitle == "Sample"){ echo 'menu__item--hovered';} ?>">
					<a> Sample </a>
				</li>
			  </ul>
			</nav>
		</header>
		<!-- beginning of main content -->
		<main class="l-main">