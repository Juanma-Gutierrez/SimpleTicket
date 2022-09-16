<?php
// Dar de alta un ticket (con el formulario en la parte superior de la tabla)

if (!isset($_GET['accion'])) $_GET['accion'] = null;

if ($_GET['accion'] == 'crear') {
    $msgSql = "ALTER TABLE ticket AUTO_INCREMENT=0;";
    mysqli_query($conexion, $msgSql);
    $altaSql = "INSERT INTO ticket (CodTic, FecTic, NumTic, CodPro, CodCon, ImpTic) VALUES ('"
        . $_GET['CodTic'] . "','"
        . $_GET['FecTic'] . "','"
        . $_GET['NumTic'] . "','"
        . $_GET['NomPro'] . "','"
        . $_GET['NomCon'] . "','"
        . $_GET['ImpTic'] . "')";
    mysqli_query($conexion, $altaSql);
    //header("location:tickets.php?order=FecTic%20DESC");
}
