<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $ladoA = $_POST['ladoA'];
    $ladoB = $_POST['ladoB'];
    $ladoC = $_POST['ladoC'];
   

    if ($ladoA > 0 && $ladoB > 0 && $ladoC > 0) {
        $p = ($ladoA + $ladoB + $ladoC) / 2;
        $area = sqrt($p * ($p - $ladoA) * ($p - $ladoB) * ($p - $ladoC));
  

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="true.css">
</head>
<body>
    <p>Primer Lado (a) = <?php echo $ladoA ?></p> <p>Segundo lado(b) = <?php echo $ladoB ?></p> <p>Tercer lado(C) = <?php echo $ladoC ?> </p>
    <p>El area es de =  <?php echo $area ?> </p>
</body>
</html>
<?php
   }else { ?>
   <head>
   <link rel="stylesheet" href="true.css    ">
   </head>
       <h1>Ingrese numeros por favor</h1>
<?php }
} else {
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Area del Triangulo</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <form method="post" id="formulario">
        <h2>Formulario</h2>
        <input type="number" name="ladoA" placeholder="Lado A" required>
        <input type="number" name="ladoB" placeholder="Lado B" required>
        <input type="number" name="ladoC" placeholder="Lado C" required>
        <input type="submit" value="Resultado">
    </form>
</body>
</html>
<?php } ?>