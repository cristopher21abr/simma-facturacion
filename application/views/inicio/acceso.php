<!doctype html>
<html class="no-js" lang="es">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0" />
		<title>SIMMA | Servicios Industriales para el manejo del medio ambiente.</title>
		<link rel="shortcut icon" href="<?= base_url('project_files/img/icon'); ?>/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?= base_url('project_files/img/icon'); ?>/apple-touch-icon.png" />
		<link rel="apple-touch-icon" sizes="57x57" href="<?= base_url('project_files/img/icon'); ?>/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="<?= base_url('project_files/img/icon'); ?>/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('project_files/img/icon'); ?>/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="<?= base_url('project_files/img/icon'); ?>/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="120x120" href="<?= base_url('project_files/img/icon'); ?>/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="<?= base_url('project_files/img/icon'); ?>/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon" sizes="152x152" href="<?= base_url('project_files/img/icon'); ?>/apple-touch-icon-152x152.png" />
		<meta name="apple-mobile-web-app-title" content="SIMMA">
		<script src="<?= base_url('project_files/js/vendor/modernizr.js'); ?>"></script>
		<script src="<?= base_url('project_files/js/jquery-2.1.4.min.js'); ?>"></script>
		<link rel="stylesheet" type="text/css" href="<?= base_url('project_files/css/style.css'); ?>">
		<!-- jQuery MSG plugin -->
		<script type="text/javascript" src="<?= base_url('project_files/msg/jquery.center.min.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url('project_files/msg/jquery.msg.min.js'); ?>"></script>
		<link media="screen" href="<?= base_url('project_files/msg/jquery.msg.css'); ?>" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="<?= base_url('project_files/js/app.js'); ?>"></script>
		<script type="text/javascript">
			var baseURL='<?= base_url(); ?>';
		</script> 
	</head>
	<body style="background: #313A39 center center no-repeat; -webkit-background-size: cover;     -moz-background-size: cover;     -o-background-size: cover; background-size: cover; url('<?= base_url('project_files/img/sistema/bg.jpg'); ?>');">
		<ul id="cbp-bislideshow" class="cbp-bislideshow">
			<li><img src="<?= base_url('project_files/img/sistema/bg-1.jpg'); ?>"/></li>
			<li><img src="<?= base_url('project_files/img/sistema/bg-2.jpg'); ?>"/></li>
			<li><img src="<?= base_url('project_files/img/sistema/bg-3.jpg'); ?>"/></li>
		</ul>
		<header>
			<nav class="top-bar" data-topbar>
				<section class="top-bar-section">
					<a href="#">
						<img src="<?= base_url('project_files/img/sistema/logo-big@1x.png'); ?>" height="56" width="232" class="brand animated fadeInDown logo">
					</a>
				</section>
			</nav>
		</header>
        <div class="row homebrand">
			<div class="large-12">
				<div class="page-canvas">
					<form id="frm_acceso" class="form-signin" role="form" onsubmit="return false">
						<input type="hidden" name="url" id="url" value="<?= base_url('inicio/login'); ?>" />
						<a href="#">
							<img src="<?= base_url('project_files/img/sistema/simma-login.png'); ?>" width="336" height="82" class="brand animated fadeInDown">
						</a>
						<div class="contenedorForma">
							<label class="label" for="usr"> Usuario </label>
							<input class="form-control" placeholder="Nombre de usuario" required="" id="usr" name="usr" />
							<label  class="label" for="pwd"> Contraseña</label>
							<input type="password" class="form-control" placeholder="Contraseña" required="" id="pwd" name="pwd" />
							<label><a href="<?= base_url("inicio/recuperarcontrasena"); ?>" class="contra">¿Olvidaste tu contraseña?</a></label> 
							<button class="btnlog" type="" onclick="Usuario.GetAcceso()">Iniciar sesión</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<script src="<?= base_url('project_files/js/jquery.imagesloaded.min.js'); ?>"></script>
		<script src="<?= base_url('project_files/js/cbpBGSlideshow.min.js'); ?>"></script>
		<script>
			$(function() {
				cbpBGSlideshow.init();
			});
		</script>
		<script src="<?= base_url('project_files/js/foundation.min.js'); ?>"></script>
		<script>
			<?php
				if(strpos(strtoupper($_SERVER["HTTP_USER_AGENT"]),strtoupper("Chrome"))===false)
				{
					if(strpos(strtoupper($_SERVER["HTTP_USER_AGENT"]),strtoupper("Firefox"))>-1)
					{
						echo 'Alert("Para una mejor experiencia del usuario se recomienda utilizar el navegador Google Chrome",function(){return true;});';
					}
					else if(strpos(strtoupper($_SERVER["HTTP_USER_AGENT"]),strtoupper("Safari"))>-1)
					{
						echo 'Alert("Para una mejor experiencia del usuario se recomienda utilizar el navegador Google Chrome",function(){return true;});';
					}
					else
					{
						echo 'Mensaje("Para una mejor experiencia del usuario debes utilizar el navegador Google Chrome",function(){return true;});';
					}
				}
			?>			
			$(document).foundation();
		</script>
		<script type="text/javascript">
    	(function(){
    		if(location.host.indexOf("dev")>-1)
    			return true;
    		if(location.host.indexOf("www")>-1)
    			return true;
    		location.href=location.protocol+"//www."+location.host+location.pathname;
    	})();
    </script>
	</body>
</html>