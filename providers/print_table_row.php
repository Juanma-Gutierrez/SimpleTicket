<?php
while ($registro = mysqli_fetch_array($consulta)) {
?>
    <tr>
        <td class="small has-text-centered"><?= $registro["CodPro"] ?></td>
        <td><?= $registro["NomPro"] ?></td>
        <td><?= $registro["DirPro"] ?></td>
        <td class="has-text-centered"><?= $registro["TelPro"] ?></td>
        <td class="small">
            <div class="centered">
                <a href="providers.php?CodPro=<?= $registro['CodPro'] ?>&NomPro=<?= $registro['NomPro'] ?>&DirPro=<?= $registro['DirPro'] ?>&TelPro=<?= $registro['TelPro'] ?>&order=CodPro&accion=editar">
                    <button class='button is-small is-warning'>
                        <span class="material-symbols-outlined">edit</span>
                    </button>
                </a>
            </div>
        </td>
        <td class="small">
            <div class="centered">
                <a href="providers.php?CodPro=<?= $registro['CodPro'] ?>&accion=borrar">
                    <button class="button is-small is-danger">
                        <span class="material-symbols-outlined">delete</span>
                    </button>
                </a>
            </div>
        </td>
    </tr>
<?php
}
?>