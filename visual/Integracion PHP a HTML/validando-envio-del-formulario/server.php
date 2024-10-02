<?php

// var_dump( empty($_POST["nombre"]));

// die();

// if ( isset($_POST["nombre"]) && !empty($_POST["nombre"])) {
//     echo "¡Hola {$_POST["nombre"]}!";
//     # code...
// } else {
//     echo "no mandaste nada MARIKON";
// }

if (isset($_POST["form"])) {
    echo "Todo el formulaario fue enviado";
}
else {
    echo "No se envio una Mondá";
}

// echo "<pre>";
// var_dump($_POST["nombre"]);
?>