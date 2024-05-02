<?php
require_once('../config/conexion.php');
class Pais
{
    public function todos()
    {
        $con = new Clase_Conectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT `Codigo`, `Pais` FROM `Paises`";
        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }
}
