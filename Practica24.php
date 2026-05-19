<?php
$edad = $_POST['edad'];
$edad_en_10_años = $edad + 10;
echo "<h1><center>";
echo "Tu edad actual es: " . $edad . "<br>";
echo "Tu edad dentro de 10 años será: " . $edad_en_10_años; 
?>
<?php
echo "<br><a href='index.html'>Volver</a>";
?>
