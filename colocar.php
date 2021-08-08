  
<?php 

include("conbd.php");

if (isset($_POST['register'])) {

     if (strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['nombre']);
	    $email = trim($_POST['email']);
	    $apellidop = trim($_POST['apellidopaterno']);
	    $apellidom = trim($_POST['apellidomaterno']);
	    $pais = trim($_POST['pais']);
	    

	    $consulta = "INSERT INTO contacto(nombre, apellidopaterno, apellidomaterno, pais, email) VALUES ('$name','$apellidop','$apellidom','$pais','$email')";
	    

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