<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Contacto</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->


</head>
<body style="background-color: rgb(50, 51, 50);">
	
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/corni.jpg);">
					<span class="login100-form-title-1">
                    Contacto
					</span>
				</div>

                <div class="card-body">
                <form action="" method="" >
                        <?php echo csrf_field(); ?>

                	<div class="form-row">
						<div class="form-group col-md-6">
						<label for="nombre">Nombre Completo</label>
						<input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre" required>
						</div>
					</div>               

					<div class="form-row">	
						<div class="form-group col-md-6">
							<label for="inputCorreo">Correo Electrónico</label>
							<input type="email" class="form-control" id="inputCorreo" placeholder="Ingrese su correo" required>
						</div>
					</div>
				

                    <div class="form-row">
						<div class="form-group col-md-6">
						<label for="asunto">Asunto</label>
						<input type="text" class="form-control" id="asunto" placeholder="Ingrese el asunto" required>
						</div>
					</div>

					<div class="mb-3">
						<label for="masInfo">Más información</label>
						<textarea class="form-control" id="masInfo" placeholder="Agregar más información" required></textarea>
							
					</div>
					
					<button type="submit" class="btn btn-danger">Enviar</button>
                    </form>
	</div>
            
        	</div>
    	</div>
</div>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\APP_SENDERO_CORNIZUELO-master\resources\views/contacto.blade.php ENDPATH**/ ?>