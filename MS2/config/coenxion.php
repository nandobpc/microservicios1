<?php
class Clase_Conectar
{
    public $conexion;
    protected $db;
    private $servidor = "localhost";
    private $usuario = "root";
    private $password = "root";
    private $base_datos = "Pozo_mensajes";

    public function ProcedimientoConectar()
    {
        $this->conexion = mysqli_connect($this->servidor, $this->usuario, $this->password, $this->base_datos);
        mysqli_set_charset($this->conexion, "utf8");
        if ($this->conexion == 0) {
            echo "Error al conectar con servidor";
        }
        $this->db = mysqli_select_db($this->conexion, $this->base_datos);
        if ($this->db == 0) {
            echo "Error al conectar a la base de datos";
        }
        return $this->conexion;
    }
}
