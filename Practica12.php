<?php
$base = $_POST['base'];
$altura = $_POST['altura'];
$area = ($base * $altura) / 2;
echo "<br><br>";
echo "<h1><center>";
echo "El área del triángulo es $area";
echo "</h1></center>";
?>
<?php
echo "<br><a href='index.html'>Regresar al index</a>";
?>