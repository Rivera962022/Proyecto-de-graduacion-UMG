<?php
require('../fpdf/fpdf.php');


class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    //$this->Image('../assets/voluntariado.jpg',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',10);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Reporte de empleados',1,0,'C');
    // Salto de línea
    $this->Ln(20);
/* 
    $this->Cell(25, 6,'DPI', 1, 0, 'C',0); */
    $this->Cell(60, 6,'Nombre', 1, 0, 'C',0);
    $this->Cell(60, 6,'Puesto', 1, 0, 'C',0);

/*     $this->Cell(30, 6,'Telefono', 1, 1, 'C',0);
     */

}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pagina ').$this->PageNo().'/{nb}',0,0,'C');
 }
}

require 'conexion.php';
$conexion = mysqli_connect($servidor,$user,$pw,$db) or 
die("la cadena tiene algo malo");
$consulta = "SELECT Nombre_empleado, Puesto from empleado";
$resultado = $conexion->query($consulta) or exit("Error code ({$conexion->errno}): {$conexion->error}");

$pdf = new PDF();
$pdf -> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

while ($row = $resultado->fetch_assoc()) {
    $pdf->Ln(5);
    $pdf->Cell(60, 6, $row['Nombre_empleado'], 1, 0, 'C',0);
    $pdf->Cell(60, 6, $row['Puesto'], 1, 0, 'C',0);
    $pdf->Ln(1);
}

$pdf->Output();
?>