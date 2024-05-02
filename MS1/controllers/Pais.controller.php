<?php
require_once('../config/cors.php');
require_once('../models/paises.models.php');

$pais = new Pais();
switch ($_GET['op']) {
    case 'todos':
        $datos = array();
        $datos = $pais->todos();
        while ($row = mysqli_fetch_assoc($datos)) {
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;
}
