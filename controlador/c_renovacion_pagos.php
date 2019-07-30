<?php
	session_start();
    $controlador=new C_Renovacion();
    $controlador->Admi();
    if (isset($_POST['update']))
	{
		$controlador->Update();
	}
	class C_Renovacion{

		private $modelo;
		private $modelo1;
		private $modelo2;

		public function Admi(){
			require_once("../modelo/m_renovacion.php");
			$this->modelo=new M_Renovacion();
			$this->modelo1=new M_Renovacion();
			require_once("../vista/v_consulta_renovaciones_pagos.php");
		}
		public function Update()
		{
			require_once("../modelo/m_renovacion.php");
			$id = $_POST['id'];
			$this->modelo2=new M_Renovacion();
			if(isset($_POST['estado']))
			{
			    $option = $_POST['estado']; 
			}
			if ($option == "cancelado") {
				$tramiteEstado=0; // cancelado
				$saldo=0; // cancelado
			}
			if ($option == "vigente") {
				$tramiteEstado=1; // vigente
				$saldo=$_POST['saldo'];
			}
			unset($_POST['update']);
            $this->modelo2->Update_Prima($id, $tramiteEstado, $saldo);
            echo  '<script> window.location ="../controlador/c_renovacion_pagos.php?"</script>';
		}
	}  
?>