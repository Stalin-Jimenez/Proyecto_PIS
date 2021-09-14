<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    require_once 'Conexion.php';

    $correo = $_GET['correo'];
    $clave = $_GET['clave'];

    $query = "SELECT correo, clave, idusuarios FROM usuarios WHERE correo='$correo'";
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
