<?php

include ("Conexion_BD/Base_De_Datos.php");

//$Nombre=$_POST['nombre']; $Apellido=$_POST['apellido'];
$TipoSangre = $_POST['RHPaciente'];
if (isset($_POST['generar_reporte'])) {
	// NOMBRE DEL ARCHIVO Y CHARSET
	header('Content-Type:text/csv; charset=latin1');
	header('Content-Disposition: attachment; filename="Reporte_Pacientes.csv"');

	// SALIDA DEL ARCHIVO
	$salida = fopen('php://output', 'w');
	// ENCABEZADOS
	fputcsv($salida, array('Codigo', 'Identificacion', 'Nombre', 'Apellido', 'Direccion', 'Telefono', 'Correo', 'Tipo de Sangre', 'Discapacidad'));
	// QUERY PARA CREAR EL REPORTE
	$reporteCsv = $conexion->query("SELECT *  FROM pacientee where rh = '$TipoSangre' ORDER BY codigoPaciente");

	while ($filaR = $reporteCsv->fetch_assoc())
		fputcsv($salida, array(
			$filaR['codigoPaciente'],
			$filaR['CC'],
			$filaR['nombre'],
			$filaR['apellido'],
			$filaR['direccion'],
			$filaR['telefono'],
			$filaR['correo'],
			$filaR['rh'],
			$filaR['discapacidad']
		));
}
