<?php
// Dar de baja un ticket (primero borramos y luego mostramos el listado de tickets)
if ($_GET['accion'] == 'borrar') {
    $bajaSql = "DELETE FROM ticket WHERE CodTic = " . $_GET['CodTic'];
    mysqli_query($conexion, $bajaSql);
}
