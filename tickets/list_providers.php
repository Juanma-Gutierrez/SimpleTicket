<?php
// Carga el listado con los proveedores ───────────────────────────────────────
$listadoProveedor = "SELECT CodPro, NomPro, DirPro, TelPro
    FROM proveedor
    ORDER BY NomPro;";
$consultaProveedor = mysqli_query($conexion, $listadoProveedor);

echo '<div class="select is-small"><select name="NomPro">';
echo "<option>Selecciona proveedor</option>";

while ($registroProveedor = mysqli_fetch_array($consultaProveedor)) {
    echo "<option ";
    if ($registroProveedor['CodPro'] == $_GET['CodPro']) echo
    " selected ";
    echo " value='" . $registroProveedor['CodPro'] . "'>" . $registroProveedor['NomPro'] . "</option>";
}
echo '</select></div>';
