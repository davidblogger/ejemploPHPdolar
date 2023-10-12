<?php
$tasa = $_POST['tasa'];
$bolivares = $_POST['montoBs'];

$calcular = $bolivares / $tasa;
$resultado = round($calcular, 2);

echo "El valor en Dolares es: $resultado";
?>
<br><br>
<a href="index.php">Regresar</a>