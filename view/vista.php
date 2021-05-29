<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/ico" href="../img/favico.jpg">
    <link rel="stylesheet" href="../css/b4/bootstrap.css">
    <script src="../js/font_awesome/all.js"></script>
    <script src="../js/swal/swal.js"></script>
    <link rel="stylesheet" href="../js/dataTable/dataTables.bootstrap4.min.css">
    <title>Cobro de fotografias</title>
</head>

<body>
    <div class="container mt-5">

        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <div class="card border border-success">
                    <div class="card-body">
                        <table class="table table-hover table-md table-responsive-md text-center" id="contenidoTabla">
                            <thead>
                                <th>id</th>
                                <th>tipo</th>
                                <th>medidas</th>
                                <th>c_fotos</th>
                                <th>Pago</th>
                            </thead>
                            <tbody>
                            <?php
    require_once '../php/conexion.php';
    
    $conectar = new Conectar();
    $conexion =  $conectar->conexion();

    $query = "SELECT * FROM t_foto";

    $resultado = $conexion->query($query);

    $tabla="";

    while($datos = $resultado->fetch_assoc()){

        $tabla = $tabla.'
        <tr>
            <td>'.$datos['id'].'</td>
            <td>'.$datos['tipo'].'</td>
            <td>'.$datos['medidas'].'</td>
            <td>'.$datos['c_fotos'].'</td>
            <td>'.$datos['pago'].'</td>
        <tr>';
    }

    $conexion->close();

    echo $tabla;
?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/jquery/jquery.js"></script>
    <script src="../js/poper/popper.js"></script>
    <script src="../js/b4/bootstrap.js"></script>
    
    <script src="../js/dataTable/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#contenidoTabla').DataTable();
        });
    </script>
</body>

</html>