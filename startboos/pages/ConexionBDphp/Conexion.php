<?PHP
	class Conexion{
		
		public function conectar(){
			$servidor="localhost";
			$usuario="root";
			$pass="";
			$bd="datoscurp";
			$conn=new mysqli($servidor, $usuario,$pass,$bd);
			return $conn;
		}
		
		public  function desconectar($conn){
			$conn->close();
		}
		
		public function actualizar($consulta,$conn){
			$result="";
			
			if($conn->query($consulta) === TRUE){
				$result.="Operación Correcta";
			}
			else{
				$result.="Operación fallida ".$conn->error;
			}
			return $result;
		}
		
		public function consultar($consulta,$conn){
			$result=$conn->query($consulta);
			
			return $result;
		}
	
	
	}

?>