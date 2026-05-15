<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - EMedical</title>

    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/estilos.css">
</head>

<body class="bg-light">

    <div class="container">

        <div class="row justify-content-center align-items-center vh-100">

            <div class="col-md-4">

                <div class="card shadow">

                    <div class="card-body">

                        <h2 class="text-center mb-4">
                            EMedical
                        </h2>

                        <form action="validar_login.php" method="POST">

                            <div class="mb-3">

                                <label class="form-label">
                                    Usuario
                                </label>

                                <input
                                    type="text"
                                    name="usuario"
                                    class="form-control"
                                    required>

                            </div>

                            <div class="mb-3">

                                <label class="form-label">
                                    Contraseña
                                </label>

                                <input
                                    type="password"
                                    name="password"
                                    class="form-control"
                                    required>

                            </div>

                            <div class="d-grid">

                                <button
                                    type="submit"
                                    class="btn btn-primary">

                                    Ingresar

                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>