<?php

session_start();

// Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 2) {

    header('location: ../../Login/index.php');
}

?>

<?php
require('../complements/fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../img/Logo.png',10,8,23);
    // Arial bold 15
    $this->SetFont('times','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(0,10,'Follow Go S.A.S');
    // Salto de línea
    $this->Ln(5);
    //----------------------------------------------------------------------
    // Arial bold 15
    $this->SetFont('times','B',12);
    // Movernos a la derecha
    $this->Cell(50);
    // Título
    $this->Cell(0,10,utf8_decode('Atencion Rápida Para Trasladar A Sus Pacientes'));
    // Salto de línea
    $this->Ln(5);
    //----------------------------------------------------------------------
     // Arial bold 15
    $this->SetFont('times','B',10);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(0,10,utf8_decode('Bogotá D.C colombia'));
    // Salto de línea
    $this->Ln(20);
    //----------------------------------------------------------------------
    // Arial bold 15
    $this->SetFont('times','B',20);
    // Movernos a la derecha
    $this->Cell(0.01);
    // Título
    $this->Cell(187,10,'Reporte de servicios',1, 0, 'C', 0);
    // Salto de línea
    $this->Ln(9.95);
    //----------------------------------------------------------------------
    
    
    
    $this->SetFont('times','B',8);
    $this->Cell(7, 8,'C.S', 1, 0, 'C', 0);
    $this->Cell(30, 8, 'Fecha y hora', 1, 0, 'C', 0);
    $this->Cell(30, 8, 'Precauciones', 1, 0, 'C', 0);
    $this->Cell(30, 8, 'Paciente', 1, 0, 'C', 0);
    $this->Cell(30, 8, 'Conductor', 1, 0, 'C', 0);
    $this->Cell(30, 8, 'Placa', 1, 0, 'C', 0);
    $this->Cell(30, 8, 'Estado', 1, 1, 'C', 0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',10);
    // Número de página
    $this->Cell(0,10,'Paginas '.$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'Conexion_BD/Base_De_Datos.php';
$ConsultaPacientes = "SELECT * FROM servicioo WHERE id = " . $_SESSION['id'] . " && estadoServicio = 'concluido'";
$ResultadoConsulta = $Conn->query($ConsultaPacientes);



$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('times','',8);

while ($row = $ResultadoConsulta->fetch_assoc()){
    
    $pdf->Cell(7, 8, $row['codigoServicio'], 1, 0, 'C', 0);
    $pdf->Cell(30, 8, $row['fecha_hora'], 1, 0, 'C', 0);
    $pdf->Cell(30, 8, $row['precauciones'], 1, 0, 'C', 0);
    $pdf->Cell(30, 8, $row['nombre'], 1, 0, 'C', 0);
    $pdf->Cell(30, 8, $row['nombrec'], 1, 0, 'C', 0);
    $pdf->Cell(30, 8, $row['placa'], 1, 0, 'C', 0);
    $pdf->Cell(30, 8, $row['estadoServicio'], 1, 1, 'C', 0);
}

$pdf->Output();
?>

