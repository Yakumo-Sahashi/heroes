<?php 
    require_once 'conexion.php';

    $conectar = new Conectar();
    $objeto = $conectar->conexion();
    $sql = "TRUNCATE TABLE t_heroes"; 
    
    $query = $objeto->prepare($sql);
    $result = $query->execute();     
    
    $objeto->close();
    if($result){
      echo "2";
    }else{
      echo "1";
    }

?>