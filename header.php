<?php
if(!isset($_SESSION)){ session_start();}
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title(' | ',true,'right'); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
		<script  src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.js"></script>
		 <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/jui/jq/jquery-ui.css">		
		<?php 
		wp_enqueue_script("jquery");
		wp_head(); 
		?>		
		</head>	
	<body>	
		
		<?php require_once 'aboutModal.php'; ?>
		<?php require_once 'contactModal.php'; ?>
		<?php require_once 'head.php'; ?>
		<?php require_once 'navbar.php'; ?>
		<?php require_once 'carousel.php'; ?>
		<?php require_once 'functions.php'; ?>
		<?php require_once 'sidebar-right.php'; ?>	
		
			
		
				
		