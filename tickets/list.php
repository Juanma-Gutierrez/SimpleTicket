<?php
// Listado ───────────────────────────────────────────────────────────────
isset($_GET['order']) ? $_GET['order'] : $_GET['order'] = 'FecTic DESC';

$listadoSql = "SELECT CodTic, NumTic, NomPro, FecTic, NomCon, ticket.CodPro, ticket.CodCon, ImpTic
FROM ticket
INNER JOIN proveedor ON proveedor.CodPro = ticket.CodPro
INNER JOIN concepto ON concepto.CodCon = ticket.CodCon
ORDER BY " . $_GET['order'] . ";";
$consulta = mysqli_query($conexion, $listadoSql);

