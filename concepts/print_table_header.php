<thead>
    <th class="small has-text-centered is-info">
        <a href="concepts.php?order=CodCon">
            <button type="submit" class="button is-info is-fullwidth">
                Código
            </button>
        </a>
    </th>
    <th class="has-text-centered is-info">
        <a href="concepts.php?order=NomCon">
            <button type="submit" class="button is-info is-fullwidth">
                Concepto
            </button>
        </a>
    </th>
    <th colspan="2" class="is-info"></th>
</thead>

<form action="concepts.php" method="$_GET">
    <tr>
        <td class="has-text-centered">
            <input class="input is-primary is-small" type="hidden" name="CodCon" placeholder="Automático" value="<?= $_GET['CodCon'] ?>">
            <code>Auto</code>
        </td>
        <td class="has-text-centered">
            <input class="input is-primary is-small" type="text" name="NomCon" value="<?= $_GET['NomCon'] ?>" placeholder="Introduce concepto" required="required">
        </td>
        <td colspan="2" class="is-success">
            <input type="hidden" name="accion" value="crear">
            <div class="centered">
                <button type="submit" class="button is-success is-small">
                    <span class="material-symbols-outlined">add</span>
                    Añadir
                </button>
            </div>
        </td>
    </tr>
</form>