<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guía para Exportar Datos de MySQL con PHP Fácil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: aliceblue;
        }

        .container {
            background-color: #ffff;
        }
    </style>
    <!-- Incluir el CSS del paquete https://www.npmjs.com/package/nextjs-toast-notify -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/nextjs-toast-notify@1.27.0/dist/nextjs-toast-notify.css" />
</head>

<body>
    <?php
    include('config/configBD.php');
    include('funciones.php');

    $empleados = getEmpleados($conexion);
    $tablasBD = listaTablesBD($conexion);
    ?>
    <div class="container border">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-5">
                <h1 class="text-center fw-bold">Guía para Exportar Datos de MySQL con PHP Fácil
                    <hr>
                </h1>
            </div>
        </div>

        <!-- Exportar -->
        <div class="row">
            <div class="col-md-12 d-flex justify-content-end align-items-center">
                <div class="px-3">
                    <label for="Tablas" class="form-label fw-bold">Tablas BD</label>
                    <select id="tablasBD" class="form-select me-2" aria-label="Database">
                        <option value="" disabled selected>Seleccione una Tabla</option>
                        <?php
                        foreach ($tablasBD as $table) {
                            echo "<option value='$table'>$table</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3 mt-5">
                    <a download="empleados.csv" href="export/export.php" class="btn btn-primary me-2">Exportar Opción 1 <i class="bi bi-file-earmark-spreadsheet"></i></a>
                    <a download="listaEmpleados.csv" href="export/export1.php" class="btn btn-primary">Exportar Opción 2 <i class="bi bi-file-earmark-spreadsheet"></i></a>
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
                                    <td><?php echo date('d-m-Y', strtotime($empleado['created_at'])); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script type="module">
        /** Importar el paquete https://www.npmjs.com/package/nextjs-toast-notify */
        import {
            toast
        } from "https://unpkg.com/nextjs-toast-notify@1.27.0/dist/index.js";

        document.addEventListener("DOMContentLoaded", function() {
            const tablasSelect = document.getElementById("tablasBD");

            if (tablasSelect) {
                tablasSelect.addEventListener("change", () => {
                    const selectedTable = tablasSelect.value; // Obtiene el valor seleccionado
                    console.log(selectedTable); // Muestra en consola la tabla seleccionada

                    // Redireccionar al archivo PHP para descargar el archivo Excel
                    window.location.href = `export/export_dinamico.php?table=${selectedTable}`;
                    misAlerta("La descarga se realizó con éxito");
                });
            }
        });

        const misAlerta = (mjs) => {
            toast.success(mjs, {
                duration: 3000, // Duración de la notificación en ms
                position: "top-left", // Posición de la notificación
                transition: "swingInverted", // Tipo de transición para la entrada
                icon: "",
                sonido: true, // Reproducir sonido
            });
        }
    </script>

</body>

</html>