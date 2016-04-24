<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta name="description" content="crear BD">
	    <meta name="author" content="SAMDI">
	</head>
	<body>
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
				echo "Se a creado su cuenta exitosamente";
				}

		?>
	</body>
</html>
