<?php
require_once('../config/cors.php');
require_once('../models/reportes.models.php');

$reporte = new Reporte();
switch ($_GET['op']) {
    case 'todos':
        $datos = array();
        $datos = $reporte->todos();
        while ($row = mysqli_fetch_assoc($datos)) {
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;
    case 'uno':
        $ReporteId = $_POST['ReporteId'];
        $datos = array();
        $datos = $reporte->uno($ReporteId);
        $res = mysqli_fetch_assoc($datos);
        echo json_encode($res);
        break;
    case 'insertar':
        $Tema = $_POST['Tema'];
        $UsuarioId = $_POST['UsuarioId'];
        $Fecha = $_POST['Fecha'];
        $datos = array();
        $datos = $reporte->insertar($Tema, $UsuarioId, $Fecha);
        echo json_encode($datos);
        break;
    case 'actualizar':
        $ReporteId = $_POST['ReporteId'];
        $Tema = $_POST['Tema'];
        $UsuarioId = $_POST['UsuarioId'];
        $Fecha = $_POST['Fecha'];
        $datos = array();
        $datos = $reporte->actualizar($ReporteId, $Tema, $UsuarioId, $Fecha);
        echo json_encode($datos);
        break;
    case 'eliminar':
        $ReporteId = $_POST['ReporteId'];
        $datos = array();
        $datos = $reporte->eliminar($ReporteId);
        echo json_encode($datos);
        break;
}
?>
