<?php
$total = 0;
while ($registro = mysqli_fetch_array($consulta)) {
?>
    <tr>
        <td class="has-text-centered"><?= date('d/m/Y', strtotime($registro["FecTic"])) ?></td>
        <td><?= $registro["NumTic"] ?></td>
        <td><?= $registro["NomPro"] ?></td>
        <td><?= $registro["NomCon"] ?></td>
        <td class="has-text-right">
            <?php
            echo number_format($registro["ImpTic"], 2, ",", ".");
            $total += $registro["ImpTic"];
            ?> €
        </td>
        <td class="small">
            <div class="centered">
                <a href="tickets.php?accion=editar&order=FecTic&CodTic=<?= $registro['CodTic'] ?>&FecTic=<?= $registro['FecTic'] ?>&NumTic=<?= $registro['NumTic'] ?>&CodPro=<?= $registro['CodPro'] ?>&CodCon=<?= $registro['CodCon']?>&ImpTic=<?= $registro['ImpTic'] ?>">
                    <button class='button is-small is-warning'>
                        <span class="material-symbols-outlined">
                            edit
                        </span>
                    </button></a>
            </div>
        </td>
        <td class="small">
            <div class="centered">
                <a href="tickets.php?accion=borrar&CodTic=<?= $registro['CodTic'] ?>">
                    <button class="button is-small is-danger">
                        <span class="material-symbols-outlined">
                            delete
                        </span>
                    </button>
                </a>
            </div>

        </td>
    </tr>
<?php
}
?>
<thead >
    <th class="is-info"></th>
    <th class="is-info"></th>
    <th class="is-info"></th>
    <th class="is-info">TOTAL:</th>
    <th class="has-text-right is-info">
        <?php
        echo number_format($total, 2, ",", ".");
        ?> €
    </th>
    <th class="is-info"></th>
    <th class="is-info"></th>

</thead>