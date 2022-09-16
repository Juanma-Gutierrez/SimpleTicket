<thead>
    <th class="has-text-centered is-info">
        <a href="providers.php?order=CodPro">
            <button type="submit" class="button is-info is-fullwidth">
                Código
            </button>
        </a>
    </th>
    <th class="has-text-centered is-info">
        <a href="providers.php?order=NomPro">
            <button type="submit" class="button is-info is-fullwidth">
                Nombre
            </button>
        </a>
    </th>
    <th class="has-text-centered is-info">
        <a href="providers.php?order=DirPro">
            <button type="submit" class="button is-info is-fullwidth">
                Dirección
            </button>
        </a>
    </th>
    <th class="has-text-centered is-info">
        <a href="providers.php?order=TelPro">
            <button type="submit" class="button is-info is-fullwidth">
                Teléfono
            </button>
        </a>
    </th>
    <th colspan="2" class="is-info"></th>
</thead>

<form action="providers.php" method="$_GET">
    <tr>
        <td class="has-text-centered">
            <input class="input is-primary is-small" type="hidden" name="CodPro" placeholder="Automático" value="<?= $_GET['CodPro'] ?>">
            <code>Auto</code>
        </td>
        <td class="has-text-centered">
            <input class="input is-primary is-small" type="text" name="NomPro" value="<?= $_GET['NomPro'] ?>" placeholder="Introduce nombre" required="required">
        </td>
        <td class="has-text-centered">
            <input class="input is-primary is-small" type="text" name="DirPro" value="<?= $_GET['DirPro'] ?>" placeholder="Introduce dirección" required="required">
        </td>
        <td class="has-text-centered">
            <input class=" input is-primary is-small" type="text" name="TelPro" value="<?= $_GET['TelPro'] ?>" placeholder="Introduce teléfono" required="required">
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