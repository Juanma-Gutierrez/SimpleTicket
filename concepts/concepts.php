<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css?1.1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Simple ticket</title>
</head>

<body>
    <div class="fixed">
        <?php
        include "../common/navbar.php";
        include "../common/bbdd_connection.php";
        ?>
    </div>
    <div class="centered">
        <button class="button is-fullwidth is-link" disabled><strong>Conceptos</strong></button>
    </div>
    <?php
    include "init_var.php";
    include "create.php";
    include "delete.php";
    include "edit.php";
    include "list.php";
    ?>
    <br>
    <div class="centered table-container">
        <table class="table is-bordered is-hoverable">
            <?php
            include "print_table_header.php";
            include "print_table_row.php";
            ?>
        </table>
    </div>
    <?php
    include "../common/footer.php";
    ?>
</body>

</html>