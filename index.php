<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/ico" href="img/favico.png">
    <link rel="stylesheet" href="css/b4/bootstrap.css">
    <link rel="stylesheet" href="css/dataTable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/font_awesome/all.js"></script>
    <script src="js/swal/swal.js"></script>
    <title>Cobro de fotografias</title>
</head>

<body class="bg-lista">
    <?php require_once 'view/nav.php';?>
    <div class="container mt-3 mb-2">
        <div class="row justify-content-around">
            <div class="col-md-12">
                <div class="card card-tb text-white">
                    <div class="card-header">
                        <h1>Super Heroes</h1>
                    </div>
                    <div class="card-body">
                        <table id="contenidoHero" class="table table-hover table-sm table-responsive-lg mt-3 text-center">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>img</th>
                                    <th>nombre</th>
                                    <th>alter_ego</th>
                                    <th>poder</th>
                                    <th>genero</th>
                                    <th>publicacion</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="card-footer lead text-muted text-right">
                        <span class="lead">Code By: AMATERASU</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery/jquery.js"></script>
    <script src="js/poper/popper.js"></script>
    <script src="js/b4/bootstrap.js"></script>
    <script src="js/dataTable/jquery.dataTables.min.js"></script>
    <script src="js/dataTable/dataTables.bootstrap4.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>