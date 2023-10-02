<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nacimiento</title>
</head>

<body>
    <form action="nacimiento.php" method="get">


        Fecha de nacimiento: <br><br>
        <?php

        const MES = [
            'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo',
            'Junio', 'Julio', 'Agosto', 'Septiembre',
            'Octubre', 'Noviembre', 'Diciembre'
        ];

        ?>
        <select>
            <?php for ($i = 1; $i < 32; $i++) {
            ?><option value='<?= $i ?>'> <?= $i ?></option>
            <?php
            }
            ?>
        </select>
        <select>
            <?php foreach (MES as $meses) {
            ?><option value='<?= $meses ?>'> <?= $meses ?></option>
            <?php
            }
            ?>
            </option>
        </select>
        <select>
            <?php for ($i = 1973; $i < 2024; $i++) {
            ?><option value='<?= $i ?>'> <?= $i ?></option>
            <?php
            }
            ?>
        </select><br><br>
        <button type="submit">Calcular</button>
        <?php


        ?>
        </form>
</body>

</html> <!--- checkdate ->
