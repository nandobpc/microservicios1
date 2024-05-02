<?php
require_once('../config/cors.php');
require_once('../models/mensajes.models.php');

$mensaje = new Mensaje();
switch ($_GET['op']) {
    case 'todos':
        $datos = array();
        $datos = $mensaje->todos();
        while ($row = mysqli_fetch_assoc($datos)) {
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;
    case 'uno':
        $MensajeId = $_POST['MensajeId'];
        $datos = array();
        $datos = $mensaje->uno($MensajeId);
        $res = mysqli_fetch_assoc($datos);
        echo json_encode($res);
        break;
    case 'insertar':
        $Telefono = $_POST['Telefono'];
        $Texto = $_POST['Texto'];
        $Prioridad = $_POST['Prioridad'];
        $Estado = $_POST['Estado'];
        $UsuarioId = $_POST['UsuarioId'];
        $datos = array();
        $datos = $mensaje->insertar($Telefono, $Texto, $Prioridad, $Estado, $UsuarioId);
        echo json_encode($datos);
        break;
    case 'actualizar':
        $MensajeId = $_POST['MensajeId'];
        $Telefono = $_POST['Telefono'];
        $Texto = $_POST['Texto'];
        $Prioridad = $_POST['Prioridad'];
        $Estado = $_POST['Estado'];
        $UsuarioId = $_POST['UsuarioId'];
        $datos = array();
        $datos = $mensaje->actualizar($MensajeId, $Telefono, $Texto, $Prioridad, $Estado, $UsuarioId);
        echo json_encode($datos);
        break;
    case 'eliminar':
        $MensajeId = $_POST['MensajeId'];
        $datos = array();
        $datos = $mensaje->eliminar($MensajeId);
        echo json_encode($datos);
        break;
}
