<?php
require_once('../config/conexion.php');
class Usuario
{
    public function todos()
    {
        $con = new Clase_Conectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT * FROM usuarios";
        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }
    public function uno($UsuarioId)
    {
        $con = new Clase_Conectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT * FROM usuarios where UsuarioId = $UsuarioId";
        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }
    public function insertar($correo, $contrasenia, $rol)
    {
        $con = new Clase_Conectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "INSERT INTO `Usuarios`( `correo`, `contrasenia`, `rol`) VALUES ('$correo','$contrasenia','$rol')";
        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }
    public function actualizar($UsuarioId, $correo, $contrasenia, $rol)
    {
        $con = new Clase_Conectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "UPDATE `Usuarios` SET `correo`='$correo',`contrasenia`='$contrasenia',`rol`='$rol' WHERE `UsuarioId`=$UsuarioId";
        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }
    public function eliminar($UsuarioId)
    {
        $con = new Clase_Conectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "DELETE FROM `Usuarios` WHERE `UsuarioId`=$UsuarioId";
        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }
    public function login($correo)
    {
        $con = new Clase_Conectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT * FROM usuarios where correo = $correo";
        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }
}
