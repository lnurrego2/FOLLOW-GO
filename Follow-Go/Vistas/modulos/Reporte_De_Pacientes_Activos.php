<?php

session_start();

// Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 1) {

    header('location: ../../Login/index.php');
}

?>
<?php
if (isset($_POST['GenerarReportePacientes'])){
    $RH = $_POST['RHPaciente'];

    $ConsultaPacientesActivos = "SELECT * FROM pacientee WHERE rh = '$RH'";
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
    $this->Cell(198,10,'Reporte de pacientes activos',1, 0, 'C', 0);
    // Salto de línea
    $this->Ln(9.95);
    //----------------------------------------------------------------------
    
    
    
    $this->SetFont('times','B',8);
    $this->Cell(7, 8,'Cod', 1, 0, 'C', 0);
    $this->Cell(18, 8, 'Identificacion', 1, 0, 'C', 0);
    $this->Cell(25, 8, 'Nombres', 1, 0, 'C', 0);
    $this->Cell(25, 8, 'Apellidos', 1, 0, 'C', 0);
    $this->Cell(35, 8, 'Direccion', 1, 0, 'C', 0);
    $this->Cell(18, 8, 'Telefono', 1, 0, 'C', 0);
    $this->Cell(40, 8, 'Correo', 1, 0, 'C', 0);
    $this->Cell(5, 8, 'RH', 1, 0, 'C', 0);
    $this->Cell(25, 8, 'Discapacidad', 1, 1, 'C', 0);
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
$ConsultaPacientesActivos = "SELECT * FROM pacientee WHERE rh = '$RH'";
$ResultadoConsultaDeActivos = $Conn->query($ConsultaPacientesActivos);



$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('times','',8);

while ($row = $ResultadoConsultaDeActivos->fetch_assoc()){
    
    $pdf->Cell(7, 8, $row['codigoPaciente'], 1, 0, 'C', 0);
    $pdf->Cell(18, 8, $row['CC'], 1, 0, 'C', 0);
    $pdf->Cell(25, 8, $row['nombre'], 1, 0, 'C', 0);
    $pdf->Cell(25, 8, $row['apellido'], 1, 0, 'C', 0);
    $pdf->Cell(35, 8, $row['direccion'], 1, 0, 'C', 0);
    $pdf->Cell(18, 8, $row['telefono'], 1, 0, 'C', 0);
    $pdf->Cell(40, 8, $row['correo'], 1, 0, 'C', 0);
    $pdf->Cell(5, 8, $row['rh'], 1, 0, 'C', 0);
    $pdf->Cell(25, 8, $row['discapacidad'], 1, 1, 'C', 0);
}

$pdf->Output();
?>

