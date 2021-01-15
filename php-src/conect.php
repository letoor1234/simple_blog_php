<?php
    $host='localhost';
    $user='root';
    $password='';
    $db='blog_1';

    $conexion= mysqli_connect($host, $user, $password, $db);
    if(!isset($conexion)){
        echo '<h2>error al conectar la base de datos</h2>';
    }
?>