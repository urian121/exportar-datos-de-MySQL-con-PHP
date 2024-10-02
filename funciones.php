<?php
// Activar errores de PHP
ini_set('display_errors', 1);
error_reporting(E_ALL);

/** FUNCION PARA OBTENER TODOS LOS EMPLEADOS */
function getEmpleados($conexion)
{
    $sql = "SELECT 
        nombre, edad, cedula,
        sexo, telefono, cargo, created_at
    FROM tbl_empleados  ORDER BY id ASC";
    $resultado = $conexion->query($sql);
    if (!$resultado) {
        return false;
    }
    return $resultado;
}

/** FUNCION PARA OBTENER UNA TABLA EN ESPECIFICO */
function getTabla($conexion, $tabla)
{
    $sql = "SELECT * FROM $tabla";
    $resultado = $conexion->query($sql);
    if (!$resultado) {
        return false;
    }
    return $resultado;
}

/** FUNCION PARA LISTAR TODAS LAS TABLAS DE UNA BASE DE DATOS */
function listaTablesBD($conexion)
{
    $sql = "SHOW TABLES";
    $resultado = $conexion->query($sql);

    if (!$resultado) {
        return false;
    }

    $tablas = [];
    while ($fila = $resultado->fetch_array()) {
        $tablas[] = $fila[0]; // Guardamos el nombre de la tabla
    }

    return $tablas;
}
