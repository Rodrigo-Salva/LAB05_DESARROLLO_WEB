<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cantidad = floatval($_POST['cantidad']);
    $tipo = $_POST['tipo'];
    $tamano = $_POST['tamano'];
    $precioInicial = floatval($_POST['precio']);

    //:) con fe
    $ajuste = 0;

    if ($tipo === "A") {
        if ($tamano == 1) {
            $ajuste = 0.20;
        } elseif ($tamano == 2) {
            $ajuste = 0.30;
        }
    } elseif ($tipo === "B") {
        if ($tamano == 1) {
            $ajuste = -0.30;
        } elseif ($tamano == 2) {
            $ajuste = -0.50;
        }
    }

    $precioFinal = $precioInicial + $ajuste;
    $gananciaFinal = $cantidad * $precioFinal;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado - Vinicultores</title>
    <link rel="stylesheet" href="true.css">
</head>
<body>
    <h2>Resultado del calculo</h2>
    <p>Cantidad de uva: <?php echo $cantidad; ?> kg</p>
    <p>Tipo de uva: <?php echo $tipo; ?></p>
    <p>Tamaño de uva: <?php echo $tamano; ?></p>
    <p>Precio inicial por kilo: S/ <?php echo number_format($precioInicial, 2); ?></p>
    <p>Precio ajustado por kilo: S/ <?php echo number_format($precioFinal, 2); ?></p>
    <p><strong>Ganancia final: S/ <?php echo number_format($gananciaFinal, 2); ?></strong></p>
</body>
</html>
<?php
} else {
    echo "Acceso no permitido.";
}
