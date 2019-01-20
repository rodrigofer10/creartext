<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crear documento.</title>
	<style>
		body{
			background-color:#3498db;
			text-align: center;	
			font-family: sans-serif;
			margin-top: 80px;
		}
		h1,p{
			color:white;
		}
		#form{
		background-color: #e74c3c;
		padding: 20px;
		width: 300px;
		border-radius:20px;
		text-align: center;	

		}
	</style>
</head>
<body>

	<?php 
include 'archivo.html';
	 ?>
<div id="form">
<form action="proceso.php" method="post">
	<p>Nombre</p>
	<input type="text" name="nombre" placeholder="Nombre" required="required">
	<p>Mensaje</p>
	<textarea name="mensaje" id="" cols="30" rows="10" placeholder="Mensaje" required="required"></textarea><br>
	<input type="submit" name="btn_enviar" value="Enviar">
</form>

</div>
</body>
</html>