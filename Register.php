<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once 'Conexion.php';

    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $usuario = $_POST['usuario'];
    $edad = $_POST['edad'];
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];
    $ncedula = $_POST['ncedula'];
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];

    $query = "INSERT INTO usuarios (nombres, apellidos, usuario, edad, altura, peso, ncedula, correo, clave) VALUES ('$nombres', '$apellidos', '$usuario', '$edad', '$altura', '$peso', '$ncedula', '$correo', '$clave')";
    $result = $mysql->query($query);

    if ($result === true) {
        echo 'Usuario Creado Exitosamente';
    } else {
        echo 'Error';
    }
}

?>
