<?php
require_once('../config/conexion.php');
class Registro
{
    public function todos()
    {
        $con = new Clase_Conectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT * FROM `resgistros` ";
        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }
    public function uno($RegistrId)
    {
        $con = new Clase_Conectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT * FROM `resgistros` WHERE `RegistrId`= $RegistrId";
        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }
    public function insertar($TipoDocumento, $Cedula, $Nombres, $Apellidos, $PaisId, $CiudadId, $Telefono, $UsuarioId)
    {
        $con = new Clase_Conectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "INSERT INTO `resgistros`( `TipoDocumento`, `Cedula`, `Nombres`, `Apellidos`, `PaisId`, `CiudadId`, `Telefono`, `UsuarioId`) VALUES ('$TipoDocumento','$Cedula','$Nombres','$Apellidos','$PaisId',$CiudadId,'$Telefono',$UsuarioId)";
        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }
    public function actualizar($RegistrId, $TipoDocumento, $Cedula, $Nombres, $Apellidos, $PaisId, $CiudadId, $Telefono, $UsuarioId)
    {
        $con = new Clase_Conectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "UPDATE `resgistros` SET ,`TipoDocumento`='$TipoDocumento',`Cedula`='$Cedula',`Nombres`='$Nombres',`Apellidos`='$Apellidos',`PaisId`='$PaisId',`CiudadId`=$CiudadId,`Telefono`='$Telefono',`UsuarioId`=$UsuarioId WHERE `RegistrId`=$RegistrId";
        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }
    public function eliminar($RegistrId)
    {
        $con = new Clase_Conectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "DELETE FROM `resgistros` WHERE `RegistrId`=$RegistrId";
        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }
}
