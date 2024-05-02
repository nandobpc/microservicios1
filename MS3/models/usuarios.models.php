<?php
require_once('../config/coenxion.php');

class Usuario
{
    private $conexion;
    
    public function __construct()
    {
        $this->conexion = (new Clase_Conectar())->ProcedimientoConectar();
    }

    public function todos()
    {
        $sql = "SELECT * FROM Usuarios";
        $result = mysqli_query($this->conexion, $sql);
        return $result;
    }

    public function uno($UsuarioId)
    {
        $sql = "SELECT * FROM Usuarios WHERE UsuarioId = '$UsuarioId'";
        $result = mysqli_query($this->conexion, $sql);
        return $result;
    }

    public function insertar($correo, $contrasenia, $rol)
    {
        $sql = "INSERT INTO Usuarios (correo, contrasenia, rol) VALUES ('$correo', '$contrasenia', '$rol')";
        $result = mysqli_query($this->conexion, $sql);
        return $result;
    }

    public function actualizar($UsuarioId, $correo, $contrasenia, $rol)
    {
        $sql = "UPDATE Usuarios SET correo = '$correo', contrasenia = '$contrasenia', rol = '$rol' WHERE UsuarioId = '$UsuarioId'";
        $result = mysqli_query($this->conexion, $sql);
        return $result;
    }

    public function eliminar($UsuarioId)
    {
        $sql = "DELETE FROM Usuarios WHERE UsuarioId = '$UsuarioId'";
        $result = mysqli_query($this->conexion, $sql);
        return $result;
    }

    public function login($correo)
    {
        $sql = "SELECT * FROM Usuarios WHERE correo = '$correo'";
        $result = mysqli_query($this->conexion, $sql);
        return $result;
    }
}
?>

