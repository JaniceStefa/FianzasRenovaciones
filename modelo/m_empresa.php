<?php 
	class M_Empresa{
		private $db;
		private $empresa;
		// Conexion con Base de Datos
		public function __construct(){
			require_once("conectar_bd.php");
			$this->db=Conectar::conexion();
			$this->empresa=array();
		}
		// Agregar Nuevo Presupuesto a Base de Datos
		public function Agregar_Empresa($ruc_empresa,$nombre_empresa,$contacto_dni,$contacto_apellido,$contacto_nombre,$contacto_email,$contacto_telefono){
			$sql="CALL EMPRESA_A('".$ruc_empresa."','".$nombre_empresa."','".$contacto_dni."','".$contacto_apellido."','".$contacto_nombre."','".$contacto_email."','".$contacto_telefono."')";
			$this->db->query($sql);
		}
		//Modificar Datos del Presupuesto
		public function Update_Empresa($ruc_empresa,$nombre_empresa,$contacto_email,$contacto_telefono,$id_empresa){
			$sql="CALL CLIENTE_U('".$ruc_empresa."','".$nombre_empresa."','".$contacto_email."','".$contacto_telefono."','".$id_empresa."')";
			$this->db->query($sql);
		}
		//Mostrar listado de Presupuesto
		public function Mostrar_Empresa(){

			$sql=$this->db->query("CALL CLIENTE_S");
			while($filas=$sql->fetch(PDO::FETCH_ASSOC)){
				$this->empresa[]=$filas;
			}
			return $this->empresa;
		}
		//Eliminar Presupuesto
		public function Eliminar_Empresa($id_empresa){
			$sql="CALL CLIENTE_D('".$id_empresa."')";
			$this->db->query($sql);
		}

	}
?>