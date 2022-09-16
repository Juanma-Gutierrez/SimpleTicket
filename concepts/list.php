<?php
// Listado ───────────────────────────────────────────────────────────────
$listadoSqlConcept = "SELECT CodCon, NomCon
    FROM concepto
    ORDER BY " . $_GET['order'];
$consulta = mysqli_query($conexion, $listadoSqlConcept);
