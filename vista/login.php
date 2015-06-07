<!DOCTYPE html>
<html>
<head>
  	<meta charset="UTF-8">
	<title>Iniciar sesion</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="../css/awesome-bootstrap-checkbox.css"         rel="stylesheet">
	<link href="../css/custom.css"        rel="stylesheet" type="text/css">
	<link href="../css/login.css"         rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<script src="../js/jquery.min.js"></script>
</head>
<body>

	<div class="container">
		<div class="principal">

			<h1> <img src="../res/img/logo.png" alt="" width="50" height="50">Logo</h1>

			<div class="cuerpo-login">
				<h2>Iniciar sesi&oacute;n</h2>

				<form class="form-login" method="post">
			        <!-- <h2 class="form-login-heading">Iniciar sesion</h2> -->
			        <div class="form-group">
			        	<label for="inputCed" class="sr-only">Cedula</label>
			        	<input type="text" name="inputCed" class="form-control" placeholder="Cedula" pattern="([0-9])*$" min="6" max="8" required autofocus>
			        </div>
			        
			        <div class="form-group">
			        	<label for="inputPassword" class="sr-only">Contraseña</label>
			        	<input type="password" name="inputPassword" class="form-control" placeholder="Contraseña" required>
			        </div>

			      
		        	<div class="recordar">
		        		<div class="checkbox checkbox-primary">				            
			                <input type="checkbox" name="cb1">
			            	<label for="cb1">Recordar</label>
		        		</div>
		        	</div>
			        	

			        <div class="registrarse" style="margin-top:20px">
				        <div class="row fila">
				        	<div class="col-md-6">
				        		<a href="registro.php"><button type="button" class="btn btn-danger" >Registrarse</button></a>
				        	</div>
				        	<div class="col-md-6">
				        		<input type="submit" name="enviar" value="Aceptar" class="btn btn-primary">
				        	</div>
				        </div>
			        	 
			        </div>	
			       			        
			        
	      		</form>

	      		<?php 
	      			if (isset($_POST['enviar'])){

						include '../controlador/OperacionesBD.php';
						$operacionesBD = new OperacionesBD();
						$cedula = $_POST['inputCed'];
						$clave = $_POST['inputPassword'];
						$operacionesBD->login($cedula,$clave);
						
	      			}

	      		 ?>	

			</div>
			
					
		</div>
	</div>

	
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>