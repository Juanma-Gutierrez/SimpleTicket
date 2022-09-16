<?php
// Carga el listado con los conceptos ──────────────────────────────────────────
$listadoConcepto = "SELECT CodCon, NomCon
    FROM concepto
    ORDER BY NomCon;";
$consultaConcepto = mysqli_query($conexion, $listadoConcepto);

echo '<div class="select is-small">';
echo '<select name="NomCon">';
echo "<option>Selecciona concepto</option>";
while ($registroConcepto = mysqli_fetch_array($consultaConcepto)) {
    echo "<option ";
    if ($registroConcepto['CodCon'] == $_GET['CodCon']) echo
    " selected ";
    echo " value='" . $registroConcepto['CodCon'] . "'>" . $registroConcepto['NomCon'] . "</option>";
}
echo '</select>';
echo '</div>';
