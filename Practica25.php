<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$ciudad = $_POST['ciudad'];
echo "<h1><center>";
echo "Tu nombre es: " . $nombre . "<br>";
echo "Tu correo electrónico es: " . $correo . "<br>";
echo "Tu ciudad de residencia es: " . $ciudad;
?>
<?php
echo "<br><a href='index.html'>Volver</a>"; 
?>
