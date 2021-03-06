<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!--
    DiáliApp - Aplicación Web para gestionar Diálisis Peritoneal Ambulatoria
    Un software dessarrollado por el equipo de Bleutecmedia - https://bleutecmedia.com
    Desarrollador: I.S.C. Rigoberto Alejandres Garcia <isc[dot]alej[at]gmail[dot]com>
    URL: https://iscalej.github.io/
-->
<!DOCTYPE html>
	<html lang="es-mx">
		<head>
            <title><?php echo lang('label_app_shorname').' | '.lang('label_app_slogan'); ?></title>
      		<meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge" lang="es">
      		<meta name="viewport" content="width=device-width, initial-scale=1">
            <meta property="og:title" content="<?php echo lang('label_app_longname'); ?>">
            <meta name="description" content="<?php echo lang('label_app_description'); ?>" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
            <meta name="keywords" content="<?php echo lang('label_meta_keywords'); ?>"/>
            <meta name="author" content="<?php echo lang('label_app_author'); ?>"/>
            <meta name="msapplication-TileColor" content="#ffffff">
            <meta name="msapplication-TileImage" content="<?php echo base_url('assets/img/favicon/ms-icon-144x144.png'); ?>">
            <meta name="theme-color" content="#ffffff">
            <meta name="google-site-verification" content="<?php echo lang('label_google_verification'); ?>">
            <meta property="og:type" content="website" />
            <meta property="og:url" content="<?php echo base_url(); ?>" />
            <meta property="og:image" content="<?php echo base_url(); ?>assets/img/logos/logo_largo.png">
            <meta property="og:site_name" content="<?php echo lang('label_app_longname'); ?>">
            <meta name="msapplication-TileColor" content="#ffffff">
            <meta name="msapplication-TileImage" content="<?php echo base_url('assets/img/favicon/ms-icon-144x144.png'); ?>">
            <meta name="theme-color" content="#ffffff">
            <base href="<?php echo base_url(); ?>" />
            <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url('assets/img/favicon/apple-icon-57x57.png'); ?>">
            <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url('assets/img/favicon/apple-icon-60x60.png'); ?>">
            <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('assets/img/favicon/apple-icon-72x72.png'); ?>">
            <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/favicon/apple-icon-76x76.'); ?>png">
            <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('assets/img/favicon/apple-icon-114x114.png'); ?>">
            <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('assets/img/favicon/apple-icon-120x120.png'); ?>">
            <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url('assets/img/favicon/apple-icon-144x144.png'); ?>">
            <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('assets/img/favicon/apple-icon-152x152.png'); ?>">
            <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/img/favicon/apple-icon-180x180.png'); ?>">
            <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url('assets/img/favicon/android-icon-192x192.png'); ?>">
            <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/img/favicon/favicon-32x32.png'); ?>">
            <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/img/favicon/favicon-96x96.png'); ?>">
            <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/img/favicon/favicon-16x16.png'); ?>">
            <link rel="manifest" href="<?php echo base_url('assets/img/favicon/manifest.json'); ?>">
  			<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  			<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/adminlte.min.css">
  			<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700">
            <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@9.15.3/dist/sweetalert2.min.css">
            <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/v/bs4/dt-1.10.18/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.5.0/r-2.2.2/rg-1.1.0/rr-1.2.4/sc-2.0.0/sl-1.3.0/datatables.min.css"/>
		    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/validationEngine.jquery.min.css">
            <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/easy-autocomplete/1.3.5/easy-autocomplete.min.css">
            <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/easy-autocomplete/1.3.5/easy-autocomplete.themes.min.css">
            <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/noty@3.2.0-beta/lib/noty.css">
            <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/noty@3.2.0-beta/lib/themes/nest.css">
            <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css'); ?>">
            <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
            <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        </head>

		<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed" oncontextmenu="return true">
			<div class="wrapper">