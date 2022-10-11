<?php
// poder conectar una base de datos
// varios parametro
//host ejemplo localhost
//usuario root
//contrasena 

$db = mysqli_connect('localhost', 'root', '', 'appsalon');


//como saber si se conecto correctamente

if (!$db) {
    echo "Error en la conexion";
    // exit;
}
// else{
//     echo "Conexion correcta";
// }

