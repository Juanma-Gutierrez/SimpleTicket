<?php
// Modificar un cliente ____________________________________________
if ($_GET['accion'] == 'editar') {
    $msgSql = "SET FOREIGN_KEY_CHECKS=0;";
    mysqli_query($conexion, $msgSql);
    $msgSql = "ALTER TABLE proveedor AUTO_INCREMENT = " . $_GET['CodPro'];
    mysqli_query($conexion, $msgSql);
    $bajaSql = "DELETE FROM proveedor WHERE CodPro = " . $_GET['CodPro'];
    mysqli_query($conexion, $bajaSql);
    $msgSql = "SET FOREIGN_KEY_CHECKS=1;";
    mysqli_query($conexion, $msgSql);
}
