<!doctype html>

<html <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">

		<title><?php wp_title( '|', true, 'right' ); ?></title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- theme options from options panel -->
		<?php get_wpbs_theme_options(); ?>

		<link rel="stylesheet" href="https://www.timgt.com/css/normalize.css">
		<link rel="stylesheet" href="https://www.timgt.com/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://www.timgt.com/css/main.css">

		<!-- typeahead plugin - if top nav search bar enabled -->
		<?php require_once('library/typeahead.php'); ?>

		<style>
            .container-fluid { max-width: 1170px; margin: 0 auto; }
        </style>

	</head>

	<body <?php body_class(); ?>>

		<?php include $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php' ?>
