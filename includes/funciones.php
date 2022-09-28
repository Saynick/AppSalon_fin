<?php

function obtenerServicios(){
    try{

        //Importar una conexión de BD
        require 'database.php';
        
        //Escribir el código SQL

        $sql = "SELECT * FROM servicios;";

        $consulta = mysqli_query($db, $sql);

        //Arreglo vacío

        $servicios = [];
        $i = 0;


        //Obtener los resultados
        while ($row = mysqli_fetch_assoc($consulta)){
         $servicios [$i] ['id'] = $row['id'];
         $servicios [$i] ['id'] = $row['nombre'];
         $servicios [$i] ['id'] = $row['precio'];

         $i++;

        }

        // echo "<pre>";
        // var_dump(json_encode($servicios));
        // echo "</pre>";
        // json_encode($servicios);
        return $servicios;
        
        

    }catch (\Throwable $th){

        var_dump($th);
    }
}

obtenerServicios();