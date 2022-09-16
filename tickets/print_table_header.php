<thead>
    <th class="has-text-centered is-info">
        <a href="tickets.php?order=FecTic%20DESC">
            <button type="submit" class="button is-info is-fullwidth">Fecha</button>
        </a>
    </th>
    <th class="has-text-centered is-info">
        <a href="tickets.php?order=NumTic">
            <button type="submit" class="button is-info is-fullwidth">Nº Ticket</button>
        </a>
    </th>
    <th class="has-text-centered is-info">
        <a href="tickets.php?order=NomPro">
            <button type="submit" class="button is-info is-fullwidth">Proveedor</button>
        </a>
    </th>
    <th class="has-text-centered is-info">
        <a href="tickets.php?order=NomCon">
            <button type="submit" class="button is-info is-fullwidth">Concepto</button>
        </a>
    </th>
    <th class="has-text-centered is-info">
        <a href="tickets.php?order=ImpTic">
            <button type="submit" class="button is-info is-fullwidth">Importe</button>
        </a>
    </th>
    <th colspan="2" class="is-info"></th>
</thead>

<form action="tickets.php" method="$_GET">
    <tr>
        <td class="has-text-centered">
            <input type="hidden" name="CodTic">
            <input class="input is-primary is-small" type="date" name="FecTic" placeholder="Introduce fecha" required="required" value="<?= $_GET['FecTic'] ?>">
        </td>
        <td class="has-text-centered">
            <input class="input is-primary is-small" type="text" name="NumTic" placeholder="Introduce nº ticket" required="required" value="<?= $_GET['NumTic'] ?>">
        </td>
        <td class="has-text-centered">
            <?php
            include "list_providers.php";
            ?>
        </td>
        <td class="has-text-centered">
            <?php
            include "list_concepts.php";
            ?>
        </td>
        <td class="has-text-centered">
            <input class="input is-primary is-small" type="number" step="any" name="ImpTic" placeholder="Introduce importe" required="required" value="<?= $_GET['ImpTic'] ?>">
        </td>
        <td colspan="2" class="is-success">
            <input type="hidden" name="accion" value="crear">
            <div class="centered">
                <button type="submit" class="button is-success is-small">
                    <span class="material-symbols-outlined">
                        add
                    </span>
                    Añadir
                </button>
            </div>
        </td>
    </tr>
</form>