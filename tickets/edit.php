<?php
// Modificar un cliente ____________________________________________
if ($_GET['accion'] == 'editar') {
    $msgSql = "SET FOREIGN_KEY_CHECKS=0;";
    mysqli_query($conexion, $msgSql);
    $msgSql = "ALTER TABLE ticket AUTO_INCREMENT = " . $_GET['CodTic'];
    mysqli_query($conexion, $msgSql);
    $bajaSql = "DELETE FROM ticket WHERE CodTic = " . $_GET['CodTic'];
    mysqli_query($conexion, $bajaSql);
    $msgSql = "SET FOREIGN_KEY_CHECKS=1;";
    mysqli_query($conexion, $msgSql);
}
