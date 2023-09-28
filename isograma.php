<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isograma</title>
</head>

<body>
    <form action="isograma.php" method="get">
    <label for="text">Introduce el texto:</label>
    <input type="text" id="isograma" name="isograma" value="<?=isset($_GET['isograma']) ? $_GET['isograma'] : '' ?>">
    <button type="submit">Comprobar</button>
    </form>
    <?php
        if (isset($_GET['isograma'])) {
        $isograma = $_GET['isograma'];


        function comprobar($isograma) {
            if ($isograma === '') {
                ?> No puedes introducir un texto vacío <?php
            }
            else {
                $caracteres = [];
                array_push($caracteres, $isograma[0]);
                for ($i = 1; $i < strlen($isograma); $i++) {
                    if (in_array($isograma[$i], $caracteres)) {
                        ?> No es un isograma <?php
                        return;
                    }
                    array_push($caracteres, $isograma[$i]);
                }
                ?> Es un isograma<?php
            return;
            }
        }
        comprobar($isograma);
        }
    ?>

</body>

</html>
