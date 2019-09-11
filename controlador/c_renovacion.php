<?php
	session_start();
    $controlador=new C_Renovacion();
    $controlador->Admi();

    if (isset($_POST['estado_pendiente']))
    {
        $controlador->EstadoPendiente();
	}
	if (isset($_POST['estado_atras']))
    {
        $controlador->EstadoOriginal();
	}

	class C_Renovacion{

		private $modelo;
		private $modelo1;

		public function Admi(){
			require_once("../modelo/m_renovacion.php");
			$this->modelo=new M_Renovacion();
			$this->modelo1=new M_Renovacion();
			require_once("../vista/v_renovacion.php");
		}

		public function EstadoPendiente(){
			require_once("../modelo/m_renovacion.php");
			$this->modelo=new M_Renovacion();
			$id = $_POST['id'];
			$this->modelo->Estado_Pendiente($id);

			echo  '<script> window.location ="../controlador/c_renovacion.php"</script>';
		}
		public function EstadoOriginal(){
			require_once("../modelo/m_renovacion.php");
			$this->modelo=new M_Renovacion();
			$id = $_POST['id'];
			$this->modelo->Estado_Original($id);

			echo  '<script> window.location ="../controlador/c_renovacion.php"</script>';
		}
	}  
?>