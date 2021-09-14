<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    require_once 'Conexion.php';

    $idusuarios = $_GET['idusuarios'];

    $query = "SELECT nmedicamento , dosis , intervalohoras FROM recetasm INNER JOIN medicamentos ON recetasm.idrecetasm = medicamentos.idmedicamentos WHERE usuarios_idusuarios='$idusuarios'";
    $result = $mysql->query($query);

    if ($mysql->affected_rows > 0) {
        while ($rows = $result->fetch_assoc()) {
            $array = $rows;
        }

        echo json_encode($array);
    } else {
        echo 'No se Encontro al Usuario';
    }

    $result->close();
    $mysql->close();
}

?>
