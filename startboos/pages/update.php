<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta name="description" content="crear BD">
	    <meta name="author" content="SAMDI">
	    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	</head>
	<body>
	<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">AVISO</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
		<?php
			//conexion a la base de datos de SAMDI
			$con = mysqli_connect("localhost", "root", "40qn", "samdi");
			if (mysqli_connect_errno()) {
				echo "No se pudo conectar a la base de datos" . mysqli_connect_error();
			}
			//guarda valores del formulario en BD
			
			$nom = mysqli_real_escape_string($con, $_POST["nom"]);
			$ap = mysqli_real_escape_string($con, $_POST["ap"]);
			$am = mysqli_real_escape_string($con, $_POST["am"]);
			$email = mysqli_real_escape_string($con, $_POST["email"]);
			$rfc = mysqli_real_escape_string($con, $_POST["rfc"]);
			$password = mysqli_real_escape_string($con, $_POST["pw"]);

			$sql = "INSERT INTO users (NOM,AP,AM,EMAIL,RFC,PW) VALUES ('$nom','$ap','$am','$email','$rfc','$password')";
			if (!mysqli_query($con,$sql)) {
				die('Error: ' . mysqli_error($con));
			}else{
				echo "Su cuenta a sido creada exitosamente";
				}
		?>

		<fieldset><a href="index.html" class="btn btn-lg btn-success btn-block">Pagina de Inicio</a>
		</form>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
         </div>    
    </div>
</fieldset>
		
	</body>
</html>