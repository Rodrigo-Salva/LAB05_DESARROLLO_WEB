<?php
function generarTrianguloPascal($n) {
    $triangulo = [];

    for ($i = 0; $i < $n; $i++) {
        $triangulo[$i] = [];

        for ($j = 0; $j <= $i; $j++) {
            if ($j === 0 || $j === $i) {
                $triangulo[$i][$j] = 1;
            } else {
                $triangulo[$i][$j] = $triangulo[$i - 1][$j - 1] + $triangulo[$i - 1][$j];
            }
        }
    }

    return $triangulo;
}

function mostrarTriangulo($triangulo) {
    $html = "<pre>";
    foreach ($triangulo as $fila) {
        $html .= str_repeat(" ", 20 - count($fila)); // centrado básico
        $html .= implode(" ", $fila) . "\n";                      
    }
    $html .= "</pre>";
    return $html;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = intval($_POST['numero']);

    if ($numero >= 3) {
        $triangulo = generarTrianguloPascal($numero);
        $resultado = mostrarTriangulo($triangulo);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Triángulo de Pascal</title>
    <link rel="stylesheet" href="true.css">
</head>
<body>
    <h2>Triángulo de Pascal con N = <?php echo $numero; ?></h2>
    <?php echo $resultado; ?>
</body>
</html>
<?php
    } else {
?>
<head>
    <link rel="stylesheet" href="true.css">
</head>
<body>
    <h1>Por favor, ingrese un número mayor o igual a 3</h1>
</body>
<?php
    }
} else {
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Triángulo de Pascal</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <form method="post" id="formulario">
        <h2>Generador de Triángulo de Pascal</h2>
        <input type="number" name="numero" placeholder="Ingrese N (≥ 3)" required>
        <input type="submit" value="Generar">
    </form>
</body>
</html>
<?php } ?>
