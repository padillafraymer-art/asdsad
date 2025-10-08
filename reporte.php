<?php


include("conexion.php");
require('fpdf/fpdf.php');


$sql = "SELECT * from usuarios ";
$result = mysqli_query($conexion, $sql);


// Crear instancia de FPDF
$pdf = new FPDF('L', 'mm', 'A4'); // 'L' para horizontal
$pdf->AddPage();


$pdf->Ln(10);
// Membrete
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 20, 'Listado de Asistencias', 0, 1, 'C'); // Centrado

// Salto de línea
$pdf->Ln(10);

// Establecer fuente
$pdf->SetFont('Arial', 'B', 12);

// Encabezados de la tabla
$pdf->Cell(45, 10, 'Nombre', 1);
$pdf->Cell(45, 10, 'Usuario', 1);
$pdf->Cell(45, 10, 'Tipo', 1);


$pdf->Ln();

// Contenido de la tabla
$pdf->SetFont('Arial', '', 12);
$contador = 0;
foreach ($result as $fila) {
	
    $pdf->Cell(45, 10, $fila['nombre'], 1);
	$pdf->Cell(45, 10, $fila['usuario'], 1);
	$pdf->Cell(45, 10, $fila['tipo'], 1);
	
    $pdf->Ln();
}

// Salida del PDF
$pdf->Output(); // 'D' para descargar el archivo
?>