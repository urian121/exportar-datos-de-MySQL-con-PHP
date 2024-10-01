<?php
if(isset($_GET['table'])) {
$tabla = $_GET['table'];
include('../config/configBD.php');
include('../funciones.php');


$empleados = getTabla($conexion, $tabla);

// Configuración en la cabecera para forzar la descarga
header("Expires: Mon, 26 Jul 2227 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");

header("Content-type: application/vnd.ms-excel; charset=UTF-8");
header("Content-Disposition: attachment; filename=tabla_" . $tabla . ".xls");
header("Content-Description: File Transfer");

// Inicializar la tabla HTML
$html  = '<table>';
$html .= '<tr>';

// Obtener los nombres de las columnas dinámicamente
$columnas = $empleados->fetch_fields();
foreach ($columnas as $columna) {
    $html .= '<th>' . htmlspecialchars($columna->name) . '</th>';
}

$html .= '</tr>';

// Llenar la tabla con los datos
while ($uso = $empleados->fetch_assoc()) {
    $html .= '<tr>';
    foreach ($uso as $valor) {
        $html .= '<td>' . htmlspecialchars($valor) . '</td>';
    }
    $html .= '</tr>';
}

$html .= '</table>';

// Imprimir el contenido de la tabla
echo $html;
exit;
}
?>