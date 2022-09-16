<?php
// Dar de baja un proveedor (primero borramos y luego mostramos el listado de proveedores) ____________________________________________
if ($_GET['accion'] == 'borrar') {
    $bajaSql = "DELETE FROM concepto WHERE CodCon = " . $_GET['CodCon'];
    mysqli_query($conexion, $bajaSql);
}
