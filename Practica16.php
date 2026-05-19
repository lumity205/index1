<?php
$horas = $_POST['horas'];
$pago = $_POST['pago'];
$nombre = $_POST['nombre'];
$total = $horas * $pago;
echo "<br><br>";
echo "<h1><center>";
echo "El pago total de $nombre es $total";
echo "</h1></center>";
?>
<?php
echo "<br><a href='index.html'>Regresar al index</a>";
?>