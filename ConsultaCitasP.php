<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    require_once 'Conexion.php';

    $idusuarios = $_GET['idusuarios'];

    $query = "SELECT institucion,fecha,direccion, usuariod, correod, usuario, correo FROM citasmp INNER JOIN doctores ON citasmp.idcitasmp INNER JOIN usuarios ON citasmp.idcitasmp WHERE usuarios_idusuarios='$idusuarios'";
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