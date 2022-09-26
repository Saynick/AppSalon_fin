<?php

$db = mysqli_connect('localhost', 'root', 'root', 'appsalon');

if (!$db){
    echo "Error en la conexión";
} else {
    echo "Conexión Correcta";
}

