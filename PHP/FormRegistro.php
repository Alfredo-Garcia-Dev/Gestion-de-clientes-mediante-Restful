<?php
echo "
<form action='' method='post' class='form_contact' id='miForm'>	
	<div class='form-group'>
		<input class='form-control form-control-sm' type='text' name='nombreU' value='' placeholder='Nombre(s)'>
		<br>
		<input class='form-control form-control-sm' type='text' name='aPatU' value='' placeholder='Apellido paterno'>
		<br>
		<input class='form-control form-control-sm' type='text' name='aMatU' value='' placeholder='Apellido materno'>
		<br>
		<input class='form-control form-control-sm' type='email' name='correoU' value='' placeholder='Ingresa Email'>
		<br>
		<input class='form-control form-control-sm' type='password' name='passwordU' value='' placeholder='Ingresa una Contraseña'>
		<br>
		<input type='submit' id='btnCrearCuenta' class='btn btn-success' value='Enviar'>
	</div>
</form> 
";
?>