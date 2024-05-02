<?php
require_once('../config/cors.php');
require_once('../models/usuarios.models.php');

$usuario = new Usuario();
switch ($_GET['op']) {
    case 'todos':
        $datos = array();
        $datos = $usuario->todos();
        while ($row = mysqli_fetch_assoc($datos)) {
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;
    case 'todosFiltro':
        $Paises_Codigo = $_POST['Paises_Codigo'];
        $datos = array();
        $datos = $usuario->todosFiltro($Paises_Codigo);
        while ($row = mysqli_fetch_assoc($datos)) {
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;
    case 'uno':
        $idCiudades = $_POST['idCiudades'];
        $datos = array();
        $datos = $usuario->uno($idCiudades);
        $res = mysqli_fetch_assoc($datos);
        echo json_encode($res);
        break;
}
