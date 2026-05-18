<?php
$numero = $_POST['numero'];
$numero2 = $_POST['numero2'];
$resultado = $numero - $numero2;
echo "<center><h1>";
echo "El resultado de la resta es: " . $resultado;
echo "</h1></center>";
?>
<?php
echo "<br><a href='index.html'>Volvera a el index</a>";