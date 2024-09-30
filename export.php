<?php
// Incluir el archivo de configuración para la conexión a la base de datos
include('config.php');
include('funciones.php');

// Configuración en la cabecera para forzar la descarga
header("Expires: Mon, 26 Jul 2227 05:00:00 GMT"); 
// Establece la fecha de expiración del contenido. En este caso, se establece una fecha futura muy lejana, indicando que el contenido no caducará.
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
// Indica la última fecha y hora en que el contenido fue modificado. Esto ayuda a los navegadores a decidir si deben utilizar una versión en caché o solicitar una nueva.
header("Cache-Control: no-cache, must-revalidate");
// Indica que el contenido no debe ser almacenado en caché y que siempre debe ser validado con el servidor antes de ser utilizado.
header("Pragma: no-cache");
// Esta cabecera es un mecanismo de control de caché más antiguo que es compatible con HTTP/1.0. Indica que no se debe almacenar en caché.
header("Content-type: application/vnd.ms-excel");
header("Content-Type: application/vnd.ms-excel; charset=UTF-8"); // Especificar UTF-8 para la codificación
// Establece el tipo de contenido del archivo que se está enviando al navegador. En este caso, indica que es un archivo de Excel.
header("Content-Disposition: attachment; filename=empleados.xls");
// Indica que el contenido se debe descargar como un archivo adjunto. El navegador presentará un cuadro de diálogo para guardar el archivo con el nombre especificado.
header("Content-Description: File Transfer");
// Proporciona una descripción del contenido que se está transfiriendo. En este caso, indica que es una transferencia de archivos.



// Obtener los empleados
$empleados = getEmpleados($conexion);

// Generar el contenido del archivo Excel
if ($empleados) {
    // Escribir encabezados de la tabla
    echo "Nombre\tEdad\tCedula\tSexo\tTelefono\tCargo\tFecha\n";

    // Escribir los registros
    foreach ($empleados as $empleado) {
        echo $empleado['nombre'] . "\t" .
             $empleado['edad'] . "\t" .
             $empleado['cedula'] . "\t" .
             $empleado['sexo'] . "\t" .
             $empleado['telefono'] . "\t" .
             $empleado['cargo'] . "\t" .
             $empleado['created_at'] . "\n";
    }
}
?>
