<?php
$cantidad = $_POST['cantidad'];
if ($cantidad > 500) {
    $descuento = $cantidad * 0.10;
    $total = $cantidad - $descuento;
    echo "<br><br>";
    echo "<h1><center>";
    echo "Si se le aplica descuento, el total a pagar es $total";
    echo "</h1></center>";
} else {
    echo "<br><br>";
    echo "<h1><center>";
    echo "No se aplica descuento, el total a pagar es $cantidad";
    echo "</h1></center>";
}
?>
<?php
echo "<br><a href='index.html'>Regresar al index</a>";
?>