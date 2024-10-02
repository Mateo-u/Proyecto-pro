<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las edades del formulario y convertirlas en un array
    $edades_input = $_POST['edades'];
    
    // Separar las edades por comas
    $edades = explode(",", $edades_input);

    // Limpiar espacios en blanco y manejar errores de entradas no numéricas
    $edades = array_map('trim', $edades);

        for ($i = 0; $i < count($edades); $i++) {
            if (is_numeric($edades[$i])) {
                $edades[$i] = (int)$edades[$i];  // Convertir a entero
                if ($edades[$i] < 5) {
                    echo   "el estudiante con ", $edades[$i]," años, guarde sus juguetes en la parte inferior de la bodega.<br>";
                } elseif ($edades[$i] >= 5 && $edades[$i] <= 7) {
                    echo "el estudiante con ", $edades[$i],"años, guarde sus juguetes en la parte media de la bodega.<br>";
                } else {
                    echo "el estudiante con ", $edades[$i],"años, guarde sus juguetes en la parte alta de la bodega.<br>";
                }
            } else {
                echo "el estudiante sin identificar guarde sus juguetes en la bodega de al lado.<br>";
            }
        }
    }

    // Llamar a la función con las edades procesadas



// $edades = [
//     4,
//     5,
//     7,
//     10,
//     'undefined age'
// ];

// function espacios_correspondientes_en_la_bodega (array $edades) {
//     for ($i = 0; $i < count($edades); $i++) {
//         if(is_int($edades[$i])) {
//             if ($edades[$i] < 5) {
//                 echo "<br>guarde sus juguetes en la parte inferior de la bodega.<br>";
//             } elseif ($edades[$i] >= 5 && $edades[$i] <= 7) {
//                 echo "<br>guarde sus juguetes en la parte media de la bodega.<br>";
//             } else {
//                 echo "<br>guarde sus juguetes en la parte alta de la bodega.<br>";
//             }
//         } else {
//             echo "<br>guarde sus juguetes en la bodega de al lado.<br>";
//         }
//     }
// }

// espacios_correspondientes_en_la_bodega ($edades);
?>