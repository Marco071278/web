<?php require_once("res/x5engine.php"); ?><!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="es-ES" dir="ltr">
	<head>
		<title>Buscar - DanisseMuebleríaEnLinea</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="generator" content="Incomedia WebSite X5 Professional 12.0.4.20 - www.websitex5.com" />
		<meta property="og:locale" content="es-ES" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://127.0.0.1:8080/imsearch.php" />
		<meta property="og:title" content="Buscar" />
		<meta property="og:site_name" content="DanisseMuebleríaEnLinea" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="style/reset.css?12-0-4-20" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/print.css?12-0-4-20" media="print" />
		<link rel="stylesheet" type="text/css" href="style/style.css?12-0-4-20" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/template.css?12-0-4-20" media="screen" />
		<link rel="stylesheet" type="text/css" href="style/menu.css?12-0-4-20" media="screen" />
		<!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="style/ie.css?12-0-4-20" media="screen" /><![endif]-->
		
		<script type="text/javascript" src="res/jquery.js?12-0-4-20"></script>
		<script type="text/javascript" src="res/x5engine.js?12-0-4-20" data-files-version="12-0-4-20"></script>
		
		
		
		<script type="text/javascript">
			x5engine.boot.push(function () { x5engine.utils.checkBrowserCompatibility(); });
		</script>
		
	</head>
	<body>
		<div id="imHeaderBg"></div>
		<div id="imFooterBg"></div>
		<div id="imPage">
			<div id="imHeader">
				<h1 class="imHidden">Buscar - DanisseMuebleríaEnLinea</h1>
				
			</div>
			<a class="imHidden" href="#imGoToCont" title="Salta el menu principal">Vaya al Contenido</a>
			<a id="imGoToMenu"></a><p class="imHidden">Menu Principal:</p>
			<div id="imMnMnGraphics"></div>
			<div id="imMnMn" class="auto">
				<div class="hamburger-site-background menu-mobile-hidden"></div><div class="hamburger-button"><div><div><div class="hamburger-bar"></div><div class="hamburger-bar"></div><div class="hamburger-bar"></div></div></div></div><div class="hamburger-menu-background-container"><div class="hamburger-menu-background menu-mobile-hidden"><div class="hamburger-menu-close-button"><span>&times;</span></div></div></div>
				<ul class="auto menu-mobile-hidden">
					<li id="imMnMnNode0" class=" imPage">
						<a href="index.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Inicio</span></span>
							</span>
						</a>
					</li><li id="imMnMnNode3" class=" imPage">
						<a href="lavadoras-2-tinas.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Lavadoras 2 Tinas</span></span>
							</span>
						</a>
					</li><li id="imMnMnNode6" class=" imPage">
						<a href="lavadoras-1-tina.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Lavadoras 1 Tina</span></span>
							</span>
						</a>
					</li><li id="imMnMnNode5" class=" imPage">
						<a href="pagina-3.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Página 3</span></span>
							</span>
						</a>
					</li></ul>
			</div>
			<div id="imContentGraphics"></div>
			<div id="imContent">
				<a id="imGoToCont"></a>
				<h2 id="imPgTitle">Resultados de búsqueda</h2><?php
$search = new imSearch();
$keys = isset($_GET['search']) ? $_GET['search'] : "";
$page = isset($_GET['page']) ? $_GET['page'] : 0;
$type = isset($_GET['type']) ? $_GET['type'] : "pages"; ?>
<div class="searchPageContainer">
<?php echo $search->search($keys, $page, $type); ?>
</div>

				<div class="imClear"></div>
			</div>
			<div id="imFooter">
				
				<div id="imFooterResponsiveContent">Copyright 2015. All rights reserved.</div>
			</div>
		</div>
		<span class="imHidden"><a href="#imGoToCont" title="Lea esta página de nuevo">Regreso al contenido</a> | <a href="#imGoToMenu" title="Lea este sitio de nuevo">Regreso al menu principal</a></span>
		
		<noscript class="imNoScript"><div class="alert alert-red">Para utilizar este sitio tienes que habilitar JavaScript.</div></noscript>
	</body>
</html>
