<?php
    include "modelo/conexion.php";
    $id = $_GET["id"];
    $sql = $conexion->query("select * from persona where id_persona = $id");

    if (isset($_POST['btnvolver'])) {
        header("Location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Modificar Usuario</title>
    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title text-center text-primary">Modificar Usuario</h2>
                        <form action="" method="POST">
                            <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
                            <?php
                                include "controllador/modificar.php";
                                while ($datos = $sql->fetch_object()) { ?>
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value="<?= $datos->nombre ?>" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="apellido" class="form-label">Apellido</label>
                                        <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido" value="<?= $datos->apellido ?>" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="dni" class="form-label">DNI</label>
                                        <input type="number" class="form-control" name="dni" id="dni" placeholder="DNI" max="9999999" value="<?= $datos->dni ?>" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="fecha" class="form-label">Fecha de nacimiento</label>
                                        <input type="date" class="form-control" name="fecha_nac" id="fecha" value="<?= $datos->fecha_nac ?>" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="correo" class="form-label">Correo</label>
                                        <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo" value="<?= $datos->correo ?>" />
                                    </div>
                            <?php } ?>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">
                                    Registrar
                                </button>
                                <button type="submit" class="btn btn-secondary mt-2" name="btnvolver" value="ok">
                                    Cancelar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>
