<?php
$palabra = $_POST["palabra"];
$letras = strlen($palabra);
echo "<h1><center>";
echo "La palabra " . $palabra . " tiene " . $letras . " letras.";
?>
<?php
echo "<br><a href='index.html'>Volver</a>";
?>