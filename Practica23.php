<?php

$producto = $_POST['producto'];
$precio = $_POST['precio'];
$iva = $precio * 0.13;
$total = $precio + $iva;
echo "<h1><center>";

echo "Precio sin IVA: $" . $precio . "<br>";
echo "IVA (13%): $" . $iva . "<br>";
echo "Total con IVA: $" . $total;

?>

<?php
echo "<br><a href='index.html'>Volver</a>";
?>
