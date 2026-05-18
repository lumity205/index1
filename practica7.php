<?php
$numero = $_POST['numero'];
$numero2 = $_POST['numero2'];
echo "<center><h1>" ;
echo "<br><br>";
if ($numero > $numero2){
    echo "El mayor es :". $numero;
}elseif ($numero < $numero2){
    echo "El mayor es $numero2";
}
echo "</center></h1>";
?>
<?php
echo "<br><a href='index.html'>volver a index</a>";
?>