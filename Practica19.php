<?php
$numero = $_POST['numero'];
?>
<?php
echo "<br><br>";
echo "<legend><center><h1>Tabla de multiplicar del numero $numero</h1></center></legend>";
echo "<h1><center>";
for ($no=1; $no <= 10; $no++) { 
    $resultado = $numero * $no;
    echo "$numero x $no = $resultado <br><br>";
}
echo "</h1></center>";
?>
<?php
echo "<br><a href='index.html'>Regresar al index</a>";
?>
