<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Contacto</title>
	<meta content="IE=edge" http-equiv="X-UA-Compatible" />
	<meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport" />
	<link href="bootstrap.css" rel="stylesheet" />
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="Contents/style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script><script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link href="Styles/Styles.css" rel="stylesheet" /><script>
	        $(document).ready(function () {
	            $('[data-toggle="popover"]').popover();
	        });
    </script>
</head>
<body>
	<header>
		<?php require("menu.php") ?>
	</header>
	<div class="container row">
		<section class="col-md-10">
			<h2>Contacto</h2>
			<form action="" class="formulario">
				<div>
					<div class="input-group">
						<input type="text" id="nombre" name="nombre"><label class="label" for="nombre">Nombre:</label>
					</div>
					<div class="input-group">
						<input type="email" id="correo" name="correo">
						<label class="label" for="correo">Correo:</label>
					</div>
					<div class="input-group">
						<input class="error" type="text" id="telefono" name="telefono">
						<label class="label error" for="telefono">Telefono:</label>
					</div>
					<div class="input-group radio">
						<p>Asunto:</p>
						<input type="radio" name="asunto" id="duda" value="duda">
						<label for="duda">Duda</label>
						<input type="radio" name="asunto" id="queja" value="queja">
						<label for="queja">Queja</label>
						<input type="radio" name="asunto" id="other" value="other">
						<label for="other">Other</label>
					</div>
					<input type="submit" id="btn-submit" value="Enviar">
				</div>
			</form>

		</section>	
		<aside class="col-md-2">
			<div class="fluid">
			<br>
			<br>
				<h3>Deja tus inquietudes</h3>
			<p>Nosotros a la brevedad nos comunicaremos con tigo en caso de que asi lo requieras Gracias por tus comentarios.</p>
			</div>
		</aside>
		
	</div>
	<div class="footer"></div>

</body>
</html>