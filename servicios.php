<?php

require 'includes/funciones.php';


$servicios1 = obtenerService();


echo json_encode($servicios1);