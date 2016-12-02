<?php

$siteTitle = "Kate & Eddie's Baby Shower";
$pageTitle = "RSVP"
require_once('database.php');

?>

<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> <?php echo $siteTitle."-".$pageTitle; ?> </title>
        <meta name="description" content="Kate & Eddie's Baby Shower">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="styles.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

		<header class="l-header">
			<nav class="navi">
				<div class="navi__header">
					<a  href="/family">
					  <h1><?php echo ucwords($siteTitle); ?></h1>
					</a>
				</div>

			  <ul class="menu">
				<li class="menu__item <?php if ($pgTitle == "Home"){ echo 'menu__item--selected';} ?>">
					<a href="/family"> Home </a>
				</li>
				<li class="menu__item <?php if ($pgTitle == "About"){ echo 'menu__item--selected';} ?>">
					<a href="/family/about.php"> About </a>
				</li>
				<li class="menu__item <?php if ($pgTitle == "Pictures"){ echo 'menu__item--selected';} ?>">
					<a href="/family/pictures.php"> Pictures </a>
				</li>
			  </ul>
			</nav>
		</header>
		<!-- beginning of main content -->
		<main class="l-main">