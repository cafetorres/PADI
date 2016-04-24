<?PHP

	include_once 'Conexion.php';
	include_once '../Modelo/persona.php';
	include_once '../Modelo/curp.php';

	class Comandos{
	
		public function insertar($objP,$objC){
			$conx=new Conexion;
			$conn=$conx->conectar();
			
			$consulta="INSERT INTO curp VALUES('".$objC->getCurp()."','".$objP->getNombre()."','".$objP->getApPaterno()."','".$objP->getApMaterno()."',date('".$objP->getFechaNac()	."'),'".$objP->getEstado()."','".$objP->getSexo()."');";
			
			$result=$conx->actualizar($consulta,$conn);
		
			$conn=$conx->desconectar($conn);
			
			return $result;
		}
		
		public function consultar(){
			$conx=new Conexion;
			$conn=$conx->conectar();
			
			$consulta="SELECT * FROM curp";
			$result=$conx->consultar($consulta,$conn);
		
			$datos="<table border='1'>
					<tr> <th>CURP</th> <th>Nombre</th>
					<th>Ap. Paterno</th>  <th>Ap.Materno</th>
					<th>F. Nacimiento</th>  
					<th>Estado</th>  <th>Sexo</th></tr>";
			if($result->num_rows>0){
				while($row=$result -> fetch_assoc()){
					$datos.="<tr> 
							<td>".$row['curp']."</td> 
							<td>".$row['nombre']."</td> 
							<td>".$row['apaterno']."</td> 
							<td>".$row['amaterno']."</td> 
							<td>".$row['fnacimiento']."</td> 
							<td>".$row['estado']."</td> 
							<td>".$row['sexo']."</td> 
						</tr>";
				}
			}
			else{
				$datos.="<tr> <td colspan='7'> 
				Sin Registros</td> </tr>";
			}
			$datos.="</table>";
		
			$conn=$conx->desconectar($conn);
			
			return $datos;
		}
	
	}

?>