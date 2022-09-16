<?php
// Dar de alta un proveedor (con el formulario en la parte superior de la tabla)

if (!isset($_GET['accion'])) $_GET['accion'] = null;

if ($_GET['accion'] == 'crear') {
    $msgSql = "ALTER TABLE proveedor AUTO_INCREMENT=0;";
    mysqli_query($conexion, $msgSql);
    $altaSql = "INSERT INTO proveedor (CodPro, NomPro, DirPro, TelPro) VALUES ('"
        . $_GET['CodPro'] . "','"
        . $_GET['NomPro'] . "','"
        . $_GET['DirPro'] . "','"
        . $_GET['TelPro'] . "')";
    mysqli_query($conexion, $altaSql);
    header("location:providers.php?order=NomPro");
}
