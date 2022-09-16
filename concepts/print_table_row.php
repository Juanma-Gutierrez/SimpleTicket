<?php
while ($registro = mysqli_fetch_array($consulta)) {
?>
    <tr>
        <td class="has-text-centered"><?= $registro["CodCon"] ?></td>
        <td><?= $registro["NomCon"] ?></td>
        <td class="small">
            <div class="centered">
                <a href="concepts.php?CodCon=<?=$registro['CodCon'] ?>&NomCon=<?= $registro['NomCon'] ?>&order=CodCon&accion=editar">
                    <button class='button is-small is-warning'>
                        <span class="material-symbols-outlined">edit</span>
                    </button>
                </a>
            </div>
        </td>
        <td class="small">
            <div class="centered">
                <a href="concepts.php?CodCon=<?= $registro['CodCon'] ?>&accion=borrar">
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