<?php
// Dar de alta un proveedor (con el formulario en la parte superior de la tabla)

if (!isset($_GET['accion'])) $_GET['accion'] = null;

if ($_GET['accion'] == 'crear') {
    $msgSql = "ALTER TABLE concepto AUTO_INCREMENT=0;";
    mysqli_query($conexion, $msgSql);
    $altaSql = "INSERT INTO concepto (CodCon, NomCon) VALUES ('"
        . $_GET['CodCon'] . "','"
        . $_GET['NomCon'] . "')";
    mysqli_query($conexion, $altaSql);
    header("location:concepts.php?order=NomCon");
}
