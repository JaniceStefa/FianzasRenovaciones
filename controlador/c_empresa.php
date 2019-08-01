<?php
	session_start();
    $controlador=new C_Empresa();
    $controlador->Admi();

    if (isset($_POST['aceptar']))
    {
        $controlador->AgregarEmpresa();
	}
	if (isset($_POST['delete']))
    {
        $controlador->Eliminar();
	}
	if (isset($_POST['update']))
	{
		$controlador->Update();
	}

	class C_Empresa{

		private $modelo;
		private $modelo1;

		
		public function Admi(){
			require_once("../modelo/m_empresa.php");
			$this->modelo=new M_Empresa();
			require_once("../vista/v_empresa.php");
		}

		public function AgregarEmpresa(){
			require_once("../modelo/m_empresa.php");
			$this->modelo1=new M_Empresa();
			$ruc_empresa = $_POST['txtruc'];
			$nombre_empresa = $_POST['txtempresa'];
			$contacto_dni = $_POST['txtdni'];
			$contacto_apellido = $_POST['txtapellido'];
			$contacto_nombre = $_POST['txtnombre'];
			$contacto_email = $_POST['txtemail'];
			$contacto_telefono = $_POST['txttelef'];
			$this->modelo1->Agregar_Empresa($ruc_empresa,$nombre_empresa,$contacto_dni,$contacto_apellido,$contacto_nombre,$contacto_email,$contacto_telefono);
			echo  '<script> window.location ="../controlador/c_empresa.php" </script>';
		}

		public function Update(){
			require_once("../modelo/m_empresa.php");
			$this->modelo=new M_Empresa();
			$ruc_empresa = $_POST['txtruc'];
			$nombre_empresa = $_POST['txtempresa'];
			$contacto_email = $_POST['txtemail'];
			$contacto_telefono = $_POST['txttelef'];
			$id_empresa = $_POST['id'];
			$this->modelo->Update_Empresa($ruc_empresa,$nombre_empresa,$contacto_email,$contacto_telefono,$id_empresa);
			echo  '<script> window.location ="../controlador/c_empresa.php" </script>';
		}
		public function Eliminar(){
			require_once("../modelo/m_empresa.php");
			$this->modelo=new M_Empresa();
			$id_empresa=$_POST['id_oficina'];
			$this->modelo->Eliminar_Empresa($id_empresa);
			echo  '<script> window.location ="../controlador/c_empresa.php" </script>';
		}
		public function Reporte(){
			require_once("../modelo/m_empresa.php");
			$this->modelo=new M_Empresa();
			require_once("../vista/reporte.php");
		}
	}  
?>


