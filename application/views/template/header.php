<!DOCTYPE HTML>
<html>
	<head>
		<title>Dav Alert: Davao Road Advisories</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,800" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Oleo+Script:400" rel="stylesheet" type="text/css" />
		
		<script src="<?= base_url().'js/jquery.min.js' ?>"></script> 
		<script src="<?= base_url().'js/config.js' ?>"></script>
		<script src="<?= base_url().'js/skel.min.js' ?>"></script>
		<script src="<?= base_url().'js/skel-panels.min.js' ?>"></script>
		
		
		<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.6.4/leaflet.css" />
		<script src="http://cdn.leafletjs.com/leaflet-0.6.4/leaflet.js"></script>
		
		<link rel="stylesheet" href="http://leaflet.github.io/Leaflet.draw/lib/leaflet/leaflet.css" />
		<link rel="stylesheet" href="http://leaflet.github.io/Leaflet.draw/leaflet.draw.css" />
		<script src="http://leaflet.github.io/Leaflet.draw/lib/leaflet/leaflet.js"></script>
		<script src="http://leaflet.github.io/Leaflet.draw/leaflet.draw.js"></script>
		
                <link rel="stylesheet" type="text/css" href="<?= base_url().'css/table.css' ?>" />
		<noscript>
			<link rel="stylesheet" href="<?= base_url().'css/skel-noscript.css' ?>" />
			<link rel="stylesheet" href="<?= base_url().'css/style.css' ?>" />
			<link rel="stylesheet" href="<?= base_url().'css/style-desktop.css' ?>" />
		</noscript>
		<!--[if lte IE 8]><script src="<?= base_url().'js/html5shiv.js' ?>"></script>
		<link rel="stylesheet" href="<?= base_url().'css/ie8.css' ?>" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="<?= base_url().'css/ie7.css' ?>" /><![endif]-->
	</head>

        <body class="homepage">

        <!-- Header Wrapper -->
        <div id="header-wrapper">
                <div class="container">
                        <div class="row">
                                <div class="12u">
                                        <!-- Header -->
                                        <header id="header">
                                                <!-- Logo -->
                                                <div id="logo">
                                                        <h1><a href="<?= base_url() ?>" id="logo">DavAlert</a></h1>
                                                        <span>
							<?php
							if($this->session->userdata('is_logged_in')) echo 'Hi <a href="profile">'.$fname.' '.$lname.'</a>!';
							else echo 'Davao City Road Advisories';
                                                        ?>
                                                        </span>
                                                </div>
                                                
                                        <!-- Nav -->
                                        <nav id="nav">
                                                <ul>
                                                        <li><a href="road_advisories">Road Advisories</a></li>
                                                        <li><a href="#">Traffic Weights</a></li>
                                                        <?php
							if($this->session->userdata('is_logged_in'))
							{
								if($type == 1)
								{
									echo '<li><a href="admins">Admins</a></li>';
								}
							}
                                                        ?>
                                                </ul>
                                        </nav>
                                        </header>
                                </div>
                        </div>
                </div>
        </div>
	
	
	<div id="banner-wrapper">
            <div class="container">
                <div class="row">
                    <div class="12u">
			<div id="banner" class="box">
                            <div>
				<div class="row">