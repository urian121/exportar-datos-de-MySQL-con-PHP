<?php
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