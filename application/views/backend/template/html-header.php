<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">7
		<!-- <Meta http-equiv="refresh" content="1.5" /> -->

		<title>Paróquia do Pilar</title>

		<!-- Bootstrap -->		
		<link href="<?php echo base_url('assets/frontend/css/bootstrap.min.css') ?>" rel="stylesheet" >
		<link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/font-awesome.min.css')?>" >
		<link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/jquery.bxslider.css') ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/css/isotope.css') ?>" media="screen" />
		<link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/animate.css') ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/frontend/js/fancybox/jquery.fancybox.css') ?>" type="text/css" media="screen" />
		<link href="<?php echo base_url('assets/frontend/css/prettyPhoto.css') ?>" rel="stylesheet" />

		<link href="<?php echo base_url('assets/frontend/css/style.css') ?>" rel="stylesheet" />	

		<link href="<?php echo base_url('assets/backend/css/subscribed_style.css') ?>" rel="stylesheet" />

		<link href="<?php echo base_url('assets/iconic/font/css/open-iconic-bootstrap.css') ?>" rel="stylesheet">
			

		<!-- =======================================================
			Theme Name: Multi
			Theme URL: https://bootstrapmade.com/multi-responsive-bootstrap-template/
			Author: BootstrapMade
			Author URL: https://bootstrapmade.com
		======================================================= -->

		<!-- Folha de estilos que sobrescreve o tema padrão -->
		<link href="<?php echo base_url('assets/backend/css/subscribed_style.css') ?>" rel="stylesheet" />
	</head>

	<!-- Início do Header (Barra de Menus) -->
	<body>

	<!-- Script para atualizar a página atual 1 vez (evita erro de reenvio de formulário) -->
	<!-- You can call this via the body tag if desired -->
	<script language="JavaScript" type="text/javascript">

		var reloaded = false;
		var loc=""+document.location;
		loc = loc.indexOf("?reloaded=")!=-1?loc.substring(loc.indexOf("?reloaded=")+10,loc.length):"";
		loc = loc.indexOf("&")!=-1?loc.substring(0,loc.indexOf("&")):loc;
		reloaded = loc!=""?(loc=="true"):reloaded;

		function reloadOnceOnly() {
			if (!reloaded)
			window.location.replace(window.location+"?reloaded=true");
		}
		reloadOnceOnly();
	</script>