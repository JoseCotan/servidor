<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <?php
    $errores = [];
    $op1 = $_GET['op1'];

    if (!is_numeric($op1)) {
        $errores[] = 'El primer operando es incorrecto.';
    }

    $op2 = $_GET['op2'];

    if (!is_numeric($op2)) {
        $errores[] = 'El segundo operando es incorrecto.';
    }

    $op  = $_GET['op'];

    if ($op != '+' && $op != '-' && $op != '*' && $op != '/') :
        $errores[] = 'El operador es incorrecto.';
    endif;

    if (empty($errores)):
        switch ($op) {
            case '+':
                $res = $op1 + $op2;
                break;
            case '-':
                $res = $op1 - $op2;
                break;
            case '*':
                $res = $op1 * $op2;
                break;
            case '/':
                $res = $op1 / $op2;
                break;
        }
    endif;
    for ($i = 0; $i < count($errores); $i++) {
        $errores[$i];
    }
    ?>
</body>
</html>
