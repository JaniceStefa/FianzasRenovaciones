<?php
	$id_empresa=193;

	include 'plantilla.php';
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage('L');
	
	function ChapterTitle($label){
    // Arial 12
    $pdf->SetFont('Arial','B',12);
    // Color de fondo
    $pdf->SetFillColor(232,232,232);
    // Título
    $pdf->Cell(0,6,"Empresa : $label",0,1,'L',true);
    // Salto de línea
    $pdf->Ln(4);
	}

	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(50,6,'Poliza',1,0,'C',1);
	$pdf->Cell(30,6,'Total Fianza',1,0,'C',1);
	$pdf->Cell(30,6,'Renovacion',1,0,'C',1);
	$pdf->Cell(30,6,'Estado',1,0,'C',1);
	$pdf->Cell(40,6,'Fecha Emision',1,0,'C',1);
	$pdf->Cell(40,6,'Fecha Vencimiento',1,0,'C',1);
	$pdf->Cell(30,6,'Saldo',1,0,'C',1);
	$pdf->Cell(30,6,'Prima',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	foreach($this->modelo->Reporte_Empresa() as $row){
		$pdf->Cell(50,6,$row['cod_cartafianza'],1,0,'C');
		$pdf->Cell(30,6,$row['total_fianza'],1,0,'C');
		$pdf->Cell(30,6,$row['prioridad'],1,0,'C');
		$pdf->Cell(30,6,$row['tramite_estado'],1,0,'C');
		$pdf->Cell(40,6,$row['fecha_emision'],1,0,'C');
		$pdf->Cell(40,6,$row['fecha_venc'],1,0,'C');
		$pdf->Cell(30,6,$row['saldo'],1,0,'C');
		$pdf->Cell(30,6,$row['prima'],1,1,'C');
	}

	$pdf->Output();
?>