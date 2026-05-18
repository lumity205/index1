<?php
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$promedio = ($nota1 + $nota2 + $nota3) / 3;
echo "<br><br>";   
echo "<h1><center>";
if ($promedio >= 7) {
    echo "El promedio es $promedio. Aprobado";
} else {
    echo "El promedio es $promedio. Reprobado.";
}
echo "</h1></center>";
?>
<?php
echo "<br><a href='index.html'>Regresar al index</a>";
?>