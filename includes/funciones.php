<?php

function obtenerService(): array{
    // punto critico consultar base de datos
    try {
        //importar una conexion
        require 'database.php';
        //escribir codigo sql
        $sql = "SELECT * FROM servicios";
        //parametros conexion de la base de datos y codigo sql
        $consulta = mysqli_query($db, $sql);

        //obtener los resultado


        // echo "<pre>";
        // // convierte un arreglo php
        // // solamente muestra uno el ultimo
        // var_dump (mysqli_fetch_assoc($consulta));
        // echo "</pre>";

        //meter todo en un arreglo

        $servicios = [];

        $i = 0;


        // row sera los registro
        while ($row = mysqli_fetch_assoc($consulta)){
            // vetara a cada ciclo de while va metiendo el hola
            // entonces en la posicion i 
            // se metera en la propiedad id, nombre y precio
            $servicios[$i]['id'] = $row['id'];
            $servicios[$i]['nombre'] = $row['nombre'];
            $servicios[$i]['precio'] = $row['precio'];
            // echo "<pre>";
            // var_dump($servicios);
            // echo "</pre>";
            $i++;
        }

        return $servicios;
    } catch (\Throwable $th) {
        var_dump($th);
    }
}