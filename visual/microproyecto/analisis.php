<?php
$texto_original = [
    'Computador',
    'Homero',
    'Mano'
];

print_r($_REQUEST);

for ($i = 0; $i < count($texto_original); $i++) {
    // Comprobar si la palabra ingresada es igual a la original
    if ($_REQUEST["palabra" . $i] == $texto_original[$i]) {
        echo "La palabra ingresada es correcta" . "<br>";
    } else {
        // Mostrar la palabra original en caso de que no coincida
        echo "La palabra ingresada es incorrecta, la palabra era " . $texto_original[$i] . "<br>";
    }
}
?>
