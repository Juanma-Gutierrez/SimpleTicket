<?php
// Listado ───────────────────────────────────────────────────────────────
$listadoSqlProviders = "SELECT CodPro, NomPro, DirPro, TelPro
    FROM proveedor
    ORDER BY " . $_GET['order'];
$consulta = mysqli_query($conexion, $listadoSqlProviders);
