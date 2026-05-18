<?php
$numeero = $_POST['numero'];
$numeero2 = $_POST['numero2']; 
$resultadoo = $numeero * $numeero2;
echo "<center><h1>";
echo "El resultado de la multiplicacion es: " . $resultadoo;
echo "</h1></center>"; 
?>
<?php
echo "<br><a href='index.html'>Volvera a el index</a>";
?>