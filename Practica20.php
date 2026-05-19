<?php

$numero = $_POST["numero"];

$suma = 0;

for ($mago = 1; $mago <= $numero; $mago++) {
    $suma = $suma + $mago;
}
echo "<h1><center>";
echo "La suma del 1 al " . $numero . " es: " . $suma;

?>
<?php
echo "<br><a href='index.html'>Volver</a>";
?>
