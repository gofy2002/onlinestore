<!DOCTYPE html>
<html>
<head>
	<title><?php echo  $titulo; ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/extra/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/extra/bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="/extra/css/jquery.dataTables.min.css">
	<script type="text/javascript" src="/extra/js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="/extra/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/extra/js/validator.min.js"></script>
	<script type="text/javascript" src="/extra/js/jquery.dataTables.min.js"></script>

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php echo form_open('',array('class' => 'form-horizontal', 'data-toggle' => 'validator') ); ?>
				<?php echo form_hidden('id',$id); ?>
				<fieldset>
					<div id="legend">
						<legend class=""><?php echo $subtitulo; ?></legend>
					</div>
					<br>
						<?php echo form_error('nombre'); ?>
						<?php echo form_error('apellidos'); ?>	
						<?php echo form_error('email'); ?>							
						<?php echo form_error('id'); ?>
						<?php echo form_error('password'); ?>	
						<?php echo form_error('telefono'); ?>
						<?php echo form_error('cumpleanios'); ?>							

					<br>

					<div class="form-group">
						<label for="nombre">Nombre:</label>
						<div class="controls">
							<?php 

								echo form_input($nombre);

							 ?>
							 <div class="help-block with-errors"></div>
						</div>
					</div>

					<div class="form-group">
						<label for="apellidos">Apellidos:</label>
						<div class="controls">
							<?php 

								echo form_input($apellidos);

							 ?>
						</div>
					</div>

					<div class="form-group">
						<label for="email">Email:</label>
						<div class="controls">
							<?php 

								echo form_input($email);

							 ?>
						</div>
					</div>


					<div class="form-group">
						<label for="password">Password:</label>
						<div class="controls">
							<?php 

								echo form_input($password);

							 ?>
						</div>
					</div>

					<div class="form-group">
						<label for="telefono">Telefono:</label>
						<div class="controls">
							<?php 

								echo form_input($telefono);

							 ?>
						</div>
					</div>


					<div class="form-group">
						<label for="cumpleanios">Fecha Nacimiento:</label>
						<div class="controls">
							<?php 

								echo form_input($cumpleanios);

							 ?>
						</div>
					</div>

					<div class="form-group">
						<div class="controls">
							<button class="btn btn-success">Registrar</button>
						</div>
					</div>

				</fieldset>
				<?php echo form_close(); ?>
			</div>		
		</div>
	</div>

</body>
</html>