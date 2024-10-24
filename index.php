<!doctype html>
<html lang="en">
    <head>
        <title>Registro de Personas</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.3.2 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body class="bg-light">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <?php include "controllador/eliminar.php";
                                include "modelo/conexion.php";
                        ?>
                        <div class="card-body">
                            <h2 class="card-title text-center text-primary">Registro de Personas</h2>
                            <form action="" method="POST">
                                <?php
                                include "controllador/registro_persona.php";
                                ?>
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="nombre"
                                        id="nombre"
                                        placeholder="Nombre"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="apellido" class="form-label">Apellido</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="apellido"
                                        id="apellido"
                                        placeholder="Apellido"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="dni" class="form-label">DNI</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="dni"
                                        id="dni"
                                        placeholder="DNI"
                                        maxlength="7"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="fecha" class="form-label">Fecha de nacimiento</label>
                                    <input
                                        type="date"
                                        class="form-control"
                                        name="fecha_nac"
                                        id="fecha"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="correo" class="form-label">Correo</label>
                                    <input
                                        type="email"
                                        class="form-control"
                                        name="correo"
                                        id="correo"
                                        placeholder="Correo"
                                    />
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">
                                        Registrar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h2 class="card-title text-center text-primary">Lista de Personas</h2>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="table-primary">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Apellido</th>
                                            <th scope="col">DNI</th>
                                            <th scope="col">Fecha de Nacimiento</th>
                                            <th scope="col">Correo</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include "modelo/conexion.php";
                                        $sql = $conexion->query("select * from persona");
                                        while ($datos = $sql->fetch_object()){
                                        ?>
                                        <tr>
                                            <td><?= $datos->id_persona?></td>
                                            <td><?= $datos->nombre?></td>
                                            <td><?= $datos->apellido?></td>
                                            <td><?= $datos->dni?></td>
                                            <td><?= $datos->fecha_nac?></td>
                                            <td><?= $datos->correo?></td>
                                            <td>
                                                <a class="btn btn-sm btn-outline-warning" href="modificar.php?id=<?= $datos->id_persona ?>">Editar</a>
                                                <a class="btn btn-sm btn-outline-danger" href="index.php?id=<?= $datos->id_persona ?>">Eliminar</a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
