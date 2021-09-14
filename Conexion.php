<?php

$mysql = new mysqli('localhost', 'root', 'stalin14', 'medic_app');

if ($mysql->connect_error) {
    die('Error' . $mysql->connect_error);
}

?>
