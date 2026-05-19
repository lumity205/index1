<?php
$dolares = $_POST["dolares"];
$euros = $dolares * 0.85;
echo "<h1><center>";
echo "$" . $dolares . " dólares equivalen a " . "€" . $euros . " euros.";
?>
<?php
echo "<br><a href='index.html'>Volver</a>";
?>