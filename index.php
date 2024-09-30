<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export data con PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <?php
    include('config.php');
    include('funciones.php');

    $empleados = getEmpleados($conexion);
    ?>
    <div class="container border">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-5">
                <h1 class="text-center fw-bold">Export data con PHP <hr></h1>
            </div>
        </div>

        <!-- Exportar -->
        <div class="row">
            <div class="col-md-12 d-flex justify-content-end align-items-center">
            <div class="mb-3 px-3">
                <select class="form-select me-2" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="mb-3">
                <a download="empleados.csv" href="export.php" class="btn btn-primary me-2">Exportar Opción 1 <i class="bi bi-file-earmark-spreadsheet"></i></a>
                <a href="export1.php" class="btn btn-primary">Exportar Opción 2 <i class="bi bi-file-earmark-spreadsheet"></i></a>
            </div>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-md-12">

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Edad</th>
                                <th scope="col">Cédula</th>
                                <th scope="col">Sexo</th>
                                <th scope="col">Teléfono</th>
                                <th scope="col">Cargo</th>
                                <th scope="col">Fecha de creación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 1;
                            foreach ($empleados as $empleado) :
                                $count += 1; ?>
                                <tr>
                                    <th><?php echo $count; ?></th>
                                    <td><?php echo $empleado['nombre']; ?></td>
                                    <td><?php echo $empleado['edad']; ?></td>
                                    <td><?php echo $empleado['cedula']; ?></td>
                                    <td><?php echo $empleado['sexo']; ?></td>
                                    <td><?php echo $empleado['telefono']; ?></td>
                                    <td><?php echo $empleado['cargo']; ?></td>
                                    <td><?php echo $empleado['created_at']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>