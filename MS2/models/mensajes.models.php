<?php
require_once('../config/conexion.php');

class Mensaje
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = new Clase_Conectar();
        $this->conexion->ProcedimientoConectar();
    }

    public function todos()
    {
        $sql = "SELECT * FROM Mensajes";
        $resultado = mysqli_query($this->conexion->conexion, $sql);
        return $resultado;
    }

    public function uno($MensajeId)
    {
        $sql = "SELECT * FROM Mensajes WHERE MensajeId = $MensajeId";
        $resultado = mysqli_query($this->conexion->conexion, $sql);
        return $resultado;
    }

    public function insertar($Telefono, $Texto, $Prioridad, $Estado, $UsuarioId)
    {
        $sql = "INSERT INTO Mensajes (Telefono, Texto, Prioridad, Estado, UsuarioId) 
                VALUES ('$Telefono', '$Texto', '$Prioridad', '$Estado', $UsuarioId)";
        $resultado = mysqli_query($this->conexion->conexion, $sql);
        return $resultado;
    }

    public function actualizar($MensajeId, $Telefono, $Texto, $Prioridad, $Estado, $UsuarioId)
    {
        $sql = "UPDATE Mensajes 
                SET Telefono = '$Telefono', Texto = '$Texto', Prioridad = '$Prioridad', Estado = '$Estado', UsuarioId = $UsuarioId 
                WHERE MensajeId = $MensajeId";
        $resultado = mysqli_query($this->conexion->conexion, $sql);
        return $resultado;
    }

    public function eliminar($MensajeId)
    {
        $sql = "DELETE FROM Mensajes WHERE MensajeId = $MensajeId";
        $resultado = mysqli_query($this->conexion->conexion, $sql);
        return $resultado;
    }
}
?>
