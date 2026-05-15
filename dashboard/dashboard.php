<?php

session_start();

if(!isset($_SESSION['usuario'])){

    header("Location: ../login/login.php");

    exit();

}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container-fluid">

        <a class="navbar-brand" href="#">
            EMedical
        </a>

        <div>

            <a href="../dashboard/dashboard.php"
               class="btn btn-outline-light me-2">

               Dashboard

            </a>

            <a href="../productos/listar.php"
               class="btn btn-outline-light me-2">

               Productos

            </a>

            <a href="../usuarios/listar.php"
               class="btn btn-outline-light me-2">

               Usuarios

            </a>

            <a href="../login/logout.php"
               class="btn btn-danger">

               Cerrar sesión

            </a>

        </div>

    </div>

</nav>

        <div class="container-fluid">

            <span class="navbar-brand">
                Sistema Inventario EMedical
            </span>

            <a
                href="../login/logout.php"
                class="btn btn-danger">

                Cerrar sesión

            </a>

        </div>

    </nav>

    <div class="container mt-5">

        <h2 class="mb-4">
     Bienvenido,
     <?php echo $_SESSION['usuario']; ?>
        </h2>

      <div class="row">

         <div class="col-md-3">

            <div class="card text-white bg-primary mb-3 shadow">

              <div class="card-body">

                <h5>Total Productos</h5>

                <h2>25</h2>

             </div>

        </div>

    </div>

    <div class="col-md-3">

        <div class="card text-white bg-success mb-3 shadow">

            <div class="card-body">

                <h5>Usuarios</h5>

                <h2>5</h2>

            </div>

        </div>

    </div>

    <div class="col-md-3">

        <div class="card text-white bg-warning mb-3 shadow">

            <div class="card-body">

                <h5>Stock Bajo</h5>

                <h2>3</h2>

            </div>

        </div>

    </div>

    <div class="col-md-3">

        <div class="card text-white bg-danger mb-3 shadow">

            <div class="card-body">

                <h5>Categorías</h5>

                <h2>4</h2>

             </div>

           </div>

         </div>

      </div>

    </div>

</body>

</html>