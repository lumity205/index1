<?php
$numero = $_POST['numero'];
echo "<br><br>";
echo "<h1><center>";
if ($numero % 2 == 0) {
    echo "El número $numero es par.";
} else {
    echo "El número $numero es impar.";
}
echo "</h1></center>";
?>
<?php
echo "<br><a href='index.html'>Regresar al index</a>";
?>