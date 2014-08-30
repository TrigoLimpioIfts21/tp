<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/css_repu.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/css_form.css"/>
<link rel="stylesheet" rev="stylesheet" href="<?php echo base_url();?>css/css_form.css" />

<script src="<?php echo base_url();?>js/jquery-1.2.6.min.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
<script type="text/javascript">
$(document).ready(function()
{
	$("#login_form input:first").focus();
});
</script>

<title> TRIGO LIMPIO <?php echo $this->lang->line('login_login'); ?></title>

</head>

<body>
<div id="background">
<img src= ../img/bg-body-repuss.jpg >
</div>

<?php echo form_open('login') ?>
<?php echo validation_errors(); ?>

<div id="cont-repu">
<?php echo $this->lang->line('login_welcome_message'); ?>

		<?php echo date('F d, Y h:i a') ?>


<div class="register">
			  	                 
               
				<label>TRIGO LIMPIO</label>				
      
 

			<div class="register">
		
		  		<div class="cell">
			  		                 
                <label><?php echo $this->lang->line('login_login'); ?></label>
								
               </div>
	
              	<div class="cell">
			  			  
                <label><?php echo $this->lang->line('login_username'); ?>:</label>
                
				<?php echo form_input(array(
							'name'=>'username', 
							
							'size'=>'40')); ?>
				
              </div>
              <div class="cell">
                <label><?php echo $this->lang->line('login_password'); ?>:</label>
                <?php echo form_password(array(
				'name'=>'password', 
				'size'=>'40')); ?>
				
						<div id="submit_button">
							<?php echo form_submit('loginButton','Iniciar' ); ?>
						</div>
				</div>
			  
			</div>
	
			
	</div>
</div>
<?php echo form_close(); ?>


</body>
</html>
