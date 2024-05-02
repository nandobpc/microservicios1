<?php
require_once('../config/coenxion.php');

class Reporte
{
    private $conexion;
    
    public function __construct()
    {
        $this->conexion = (new Clase_Conectar())->ProcedimientoConectar();
    }

    public function todos()
    {
        $sql = "SELECT * FROM Reportes";
        $result = mysqli_query($this->conexion, $sql);
        return $result;
    }

    public function uno($ReporteId)
    {
        $sql = "SELECT * FROM Reportes WHERE ReporteId = '$ReporteId'";
        $result = mysqli_query($this->conexion, $sql);
        return $result;
    }

    public function insertar($Tema, $UsuarioId, $Fecha)
    {
        $sql = "INSERT INTO Reportes (Tema, UsuarioId, Fecha) VALUES ('$Tema', '$UsuarioId', '$Fecha')";
        $result = mysqli_query($this->conexion, $sql);
        return $result;
    }

    public function actualizar($ReporteId, $Tema, $UsuarioId, $Fecha)
    {
        $sql = "UPDATE Reportes SET Tema = '$Tema', UsuarioId = '$UsuarioId', Fecha = '$Fecha' WHERE ReporteId = '$ReporteId'";
        $result = mysqli_query($this->conexion, $sql);
        return $result;
    }

    public function eliminar($ReporteId)
    {
        $sql = "DELETE FROM Reportes WHERE ReporteId = '$ReporteId'";
        $result = mysqli_query($this->conexion, $sql);
        return $result;
    }
}
?>
