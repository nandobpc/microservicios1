<?php
require_once('../config/conexion.php');
class Usuario
{
    public function todos()
    {
        $con = new Clase_Conectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT `idCiudades`, `Paises_Codigo`, `Ciudad` FROM `Ciudades` WHERE `idCiudades`=";
        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }
    public function todosFiltro($Paises_Codigo)
    {
        $con = new Clase_Conectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT `idCiudades`, `Paises_Codigo`, `Ciudad` FROM `Ciudades` WHERE `Paises_Codigo`=$Paises_Codigo";
        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }
    public function uno($idCiudades)
    {
        $con = new Clase_Conectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "SSELECT `idCiudades`, `Paises_Codigo`, `Ciudad` FROM `Ciudades` WHERE `idCiudades`=$idCiudades";
        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }
}
