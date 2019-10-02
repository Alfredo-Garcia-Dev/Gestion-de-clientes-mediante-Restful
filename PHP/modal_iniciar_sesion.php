<?php 
echo "
<div class='modal fade bg' id='mostrarmodal' tabindex='-1' role='dialog' aria-labelledby='basicModal' aria-hidden='true'>
<div class='modal-dialog'>
    <div class='modal-content'>
        <div class='modal-header'>
        <h4>No has iniciado sesión... <b>¿Comenzamos?</b></h4>
        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
	        </div>
        <div class='modal-body'>
        	<div class='form-group'>
       		<input id='autofocus' class='form-control form-control-sm' type='email' name='usuario' placeholder='Correo de usuario'>
       		</div>
       		<div class='form-group'>
			<input class='form-control form-control-sm' type='password' name='password' placeholder='Contraseña'>
			</div>
			<div class='text-center'>
			<button type='submit' id='btnIniciarSesion' class='btn btn-primary'>Inicio de Sesión</button>
		    </div>
			<div class='modal-footer'>
				 ¿No tienes cuenta? Creemos una
			</div>
			<button id='btnRegistar' type='submit' class='btn btn-success float-right' data-dismiss='modal' aria-hidden='true' >Registrate</button>
		</div>
  </div>
</div>
</div>
";
?>