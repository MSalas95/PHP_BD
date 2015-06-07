<!DOCTYPE html>
<html>
<head>
  	<meta charset="UTF-8">
	<title>Registrarse</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">	
	<link href="../css/custom.css"        rel="stylesheet" type="text/css">
	<link href="../css/login.css"         rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/sweetalert.min.js"></script>
	<link  href="../css/sweetalert.css" rel="stylesheet" type="text/css">
</head>
<body>

	<div class="container">
		<div class="principal">

			<h1> <img src="../res/img/logo.png" alt="" width="50" height="50">Logo</h1>

			<div class="cuerpo-login">
				<h2>Registrarse	</h2>

				<form method="post" class="form-login">

					<div class="form-group">
			        	<label for="inputCed" class="sr-only">Cedula</label>
			        	<input type="text" name="inputCed" class="form-control" placeholder="Cedula" pattern="([0-9])*$" required>
			        </div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
					        	<label for="inputNom" class="sr-only">Nombre</label>
					        	<input type="text" name="inputNom" class="form-control" placeholder="Nombre" required autofocus>
				        	</div>				        	
						</div>
						<div class="col-md-6">
							<div class="form-group">
					        	<label for="inputApe" class="sr-only">Apellido</label>
					        	<input type="text" name="inputApe" class="form-control" placeholder="Apellido" required>
				        	</div>				        	
						</div>
					</div>			        
			        
			        <div class="row">
			        	<div class="col-md-6">
			        		<div class="form-group">
			        			<label for="inputPassword1" class="sr-only">Contraseña</label>
			        			<input type="password" name="inputPassword1" class="form-control" placeholder="Contraseña" required>
			        		</div>
			        	</div>
			        	<div class="col-md-6">
			        		<div class="form-group">
					        	<label for="inputPassword2" class="sr-only">Confirmar</label>
					        	<input type="password" name="inputPassword2" class="form-control" placeholder="Confirmar" required>
					        </div>
			        	</div>

			        </div>
			        	

			        <div class="registrarse">
				        <div class="row fila">
				        	<div class="col-md-6">
				        		<a href="login.php"><button type="button" class="btn btn-danger" >Regresar</button></a>
				        	</div>
				        	<div class="col-md-6">
				        		<input type="submit" name="enviar" value="Registrarse" class="btn btn-primary">
				        	</div>
				        </div>
			        	 
			        </div>	     
	      		</form>	      			

	      		<?php 
	      			if (isset($_POST['enviar'])){
	      				include '../controlador/OperacionesBD.php';
	      				$nombre = $_POST['inputNom'];
	      				$apellido = $_POST['inputApe'];
	      				$cedula = $_POST['inputCed'];

	      				if ($_POST['inputPassword1']===$_POST['inputPassword2']) {
	      					$operacionesBD = new OperacionesBD();	      				
	      					$operacionesBD->registrarTecnico($nombre,$apellido,$cedula,$_POST['inputPassword1']);
	      				} else {
	      					echo 'Las contraseñas deben ser iguales.';
	      				}


	      				
	      			}
	      		 ?>


			</div>			
					
		</div>
	</div>


	<script type="text/javascript">

		/*swal({   title: "Are you sure?",   
			text: "You will not be able to recover this imaginary file!",   
			type: "warning",   
			showCancelButton: true,  
			confirmButtonColor: "#DD6B55",   
			confirmButtonText: "Yes, delete it!",   
			closeOnConfirm: false }, 
			function(){   
			swal("Deleted!", "Your imaginary file has been deleted.", "success"); });*/

	</script>
	
</body>
</html>