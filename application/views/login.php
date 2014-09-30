<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8"/>
	<base href="<?php echo base_url();?>" />
	<title><?php echo $this->config->item('company').' -- '.$this->lang->line('common_powered_by').' Empresa Distribuidora'?></title>
	<link href="img/favicon.ico" rel="icon" type="image/x-icon" />
	<script>BASE_URL = '<?php echo site_url(); ?>';</script>
			
	<!--Estilo de la pagina-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/inicio.css"/>
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<!--Comienzo del Menu-->
<div id="header">
	<div id="login">	
	<?php echo form_open('login') ?>
	<?php echo validation_errors(); ?>
	<span class="glyphicon glyphicon-user"></span>
	<?php echo form_input(array(
	'name'=>'username', 
	'size'=>'40')); ?>
	<span class="glyphicon glyphicon-qrcode"></span>
	<?php echo form_password(array(
	'name'=>'password', 
	'size'=>'40')); ?>		
	<button type="submit" class="btn btn-success btn-lg">Iniciar Sesion</button>
	</div>
	 <div id="logo">
          <img src="img/logo.gif" height="50px">
     </div>
     <div id="empresa">
          <h1>Trigo Limpio</h1>
     </div>
</div>
<!--Fin del Menu-->
<!--Video-->
<div id="video">
	<video src="Video/Video.mp4" autoplay="true" id="bgvid" loop="true"></video>
</div>
<script src="js/bootstrap.min.js"></script>
<?php echo form_close(); ?>

</body>
</html>
