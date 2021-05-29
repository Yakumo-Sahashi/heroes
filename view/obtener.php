<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/ico" href="../img/favico.png">
    <link rel="stylesheet" href="../css/b4/bootstrap.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/carga.css">
    <script src="../js/font_awesome/all.js"></script>
    <script src="../js/swal/swal.js"></script>
    <title>Obtener Super Heroes</title>
</head>

<body class="bg-obtener">
    <div class="contenedor" id="contenedor" style="visibility: hidden";>
        <div class="loader-container">
            <div class="loader"></div>
            <div class="loader2"></div>
            <img loading="lazy" class="img-load" src="../img/favico.png" alt="">
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark scrorev-nav-control menu">
        <div class="container text-center">
            <a class="navbar-brand" href="../" style="color: #FFF;"><img class="ml-2 mr-2" src="../img/favico.png"
                    width="25px" height="25px"><b>AMATERASU</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars text-white"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                </ul>
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="btn btn-dark" href="obtener.php">Obtener Heroes</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-dark" href="../">Listado Heroes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row justify-content-around">
            <div class="col-md-10 mt-4">
                <div class="card card-tb text-white border border-danger">
                    <div class="card-header">
                        <h1>Obtener listado de Super Heroes API</h1>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-danger btn-block btn-lg" type="button" id="agregar">Insertar Heroes en la
                            DB</button>
                        <button class="btn btn-dark btn-block" type="button" id="elimina">Eliminar registros en la
                            DB</button>
                    </div>
                    <div class="card-footer lead text-muted text-right">
                        <span class="lead">Code By: AMATERASU</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/jquery/jquery.js"></script>
    <script src="../js/poper/popper.js"></script>
    <script src="../js/b4/bootstrap.js"></script>
    <script src="../js/obtener.js"></script>
</body>
</html>