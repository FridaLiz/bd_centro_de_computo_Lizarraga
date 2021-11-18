<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>¡Capacitaciones!</h1>
    	<input type="text" name="name" placeholder="Nombre">
		<input type="text" name="apellido" placeholder="Apellido">
    	<input type="email" name="email" placeholder="Correo Electronico">
		<input type="text" name="capacitacion" placeholder="Capacitacion de tu Interes">
		<input type="date" name="fecha" placeholder="Fecha">
    	<input type="submit" name="enviar">
    </form>
        <?php 
        include("capacitacion.php");
        ?>
</body>
</html>