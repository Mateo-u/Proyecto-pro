<?php
echo "<pre>";
var_dump($_GET);
echo "/<pre>";

$nombre = $_GET["nombre"];
$edad = $_GET["edad"];

echo "el usuario $nombre tiene $edad.";

?>