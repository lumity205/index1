<?php
$nombre = $_POST['nombre'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$total = $cantidad * $precio;
echo "<br><br>";

echo "<legend><center><h1>Factura de compra</h1></center></legend>";
echo "<h1><center>";
echo "El cliente : $nombre"; 
echo"<br><br>";
echo " compró : $cantidad "; 
echo"<br><br>";
echo " unidades del producto :$producto "; 
echo"<br><br>";
echo " a un precio de : $precio cada una "; 
echo"<br><br>";
echo "por lo que el total a pagar es $total"; 
echo"<br><br>";
echo "</h1></center>";

?>
<?php
echo "<br><a href='index.html'>Regresar al index</a>";
?>