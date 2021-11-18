<?php 

include("con_db.php");

if (isset($_POST['enviar'])) {
    if (strlen($_POST['name']) >= 1 && 
	     strlen($_POST['apellido']) >= 1 &&
	     strlen($_POST['email']) >= 1 &&
		 strlen($_POST['capacitacion']) >= 1 &&
		 strlen($_POST['fecha']) >= 1 ) {

	    $name = trim($_POST['name']);
		$apellido = trim($_POST['apellido']);
	    $email = trim($_POST['email']);
		$capacitacion = trim($_POST['capacitacion']);
	    $fecha = date($_POST["fecha"]);
	   
		$consulta = "INSERT INTO capacitacion ( nombre, apellido, correo, capacitacion, fecha) VALUES ('$name','$apellido','$email','$capacitacion','$fecha')";
	   
		$resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscrito correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>