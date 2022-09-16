<?php
// Modificar un cliente ____________________________________________
if ($_GET['accion'] == 'editar') {
    $msgSql = "SET FOREIGN_KEY_CHECKS=0;";
    mysqli_query($conexion, $msgSql);
    $msgSql = "ALTER TABLE concepto AUTO_INCREMENT = " . $_GET['CodCon'];
    mysqli_query($conexion, $msgSql);
    $bajaSql = "DELETE FROM concepto WHERE CodCon = " . $_GET['CodCon'];
    mysqli_query($conexion, $bajaSql);
    $msgSql = "SET FOREIGN_KEY_CHECKS=1;";
    mysqli_query($conexion, $msgSql);
}
