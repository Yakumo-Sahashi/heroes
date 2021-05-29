<?php 
    require_once 'conexion.php';

    $data = json_decode($_POST['datosHero'],true);
    $conectar = new Conectar();
    $objeto = $conectar->conexion();
    $sql = "INSERT INTO t_heroes (img,nombre,alter_ego,poder,genero,publicacion) VALUES (?,?,?,?,?,?)"; 
    
    $result = "";

    foreach ($data as $dt) {
      $query = $objeto->prepare($sql);
      $query->bind_param('ssssss',$dt['img'],$dt['nombre'],$dt['alter_ego'],$dt['poder'],$dt['genero'],$dt['publicacion']);
      $result = $query->execute();   
    }  
    
    $objeto->close();
    if($result){
      echo "2";
    }else{
      echo "1";
    }

?>