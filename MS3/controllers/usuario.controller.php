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
    case 'uno':
        $UsuarioId = $_POST['UsuarioId'];
        $datos = array();
        $datos = $usuario->uno($UsuarioId);
        $res = mysqli_fetch_assoc($datos);
        echo json_encode($res);
        break;
    case 'insertar':
        $correo = $_POST['correo'];
        $contrasenia = $_POST['contrasenia'];
        $rol = $_POST['rol'];
        $datos = array();
        $datos = $usuario->insertar($correo, $contrasenia, $rol);
        echo json_encode($datos);
        break;
    case 'actualizar':
        $UsuarioId = $_POST['UsuarioId'];
        $correo = $_POST['correo'];
        $contrasenia = $_POST['contrasenia'];
        $rol = $_POST['rol'];
        $datos = array();
        $datos = $usuario->actualizar($UsuarioId, $correo, $contrasenia, $rol);
        echo json_encode($datos);
        break;
    case 'eliminar':
        $UsuarioId = $_POST['UsuarioId'];
        $datos = array();
        $datos = $usuario->eliminar($UsuarioId);
        echo json_encode($datos);
        break;
    case 'login':
        $correo = $_POST['correo'];
        $contrasenia = $_POST['contrasenia'];
        if (empty($correo) || empty($contrasenia)) {
            header('Location: ../login.php?op=2');
            exit();
        }
        try {
            $datos = array();
            $datos = $usuario->login($correo);
            $res = mysqli_fetch_assoc($datos);
        } catch (Exception $e) {
            header('Location: ../login.php?op=1');
            exit();
        }
        try {
            if (is_array($res) and count($res) > 0) {
                if ($contrasenia == $res['contrasenia']) {
                    $_SESSION['UsuarioId'] = $res['UsuarioId'];
                    $_SESSION['correo'] = $res['correo'];
                    $_SESSION['rol'] = $res['rol'];
                    header('Location: ../index.php');
                    exit();
                }
            }
        } catch (\Throwable $th) {
            header('Location: ../login.php?op=1');
            exit();
        }
        break;
}

