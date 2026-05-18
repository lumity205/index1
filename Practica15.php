<?php
$celcius = $_POST['celsius'];
$fahrenheit = ($celcius * 9/5) + 32;
echo "<br><br>";
echo "<h1><center>";
echo "La temperatura en Fahrenheit es $fahrenheit";
echo "</h1></center>";
?>
<?php
echo "<br><a href='index.html'>Regresar al index</a>";
?>
