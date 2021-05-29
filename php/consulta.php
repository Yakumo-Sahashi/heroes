<?php
    require_once 'conexion.php';
    
    $conectar = new Conectar();
    $conexion =  $conectar->conexion();

    $query = "SELECT * FROM t_heroes";

    $resultado = $conexion->query($query);

    while($datos = $resultado->fetch_assoc()){
        $cont_dt['data'][]=array_map('utf8_encode',$datos);

    }
    echo json_encode($cont_dt, JSON_UNESCAPED_UNICODE);
    $conexion->close();
?>