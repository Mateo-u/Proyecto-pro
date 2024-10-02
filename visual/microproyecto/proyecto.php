<?php
  $texto_original = [
    'Computador',
    'Homero',
    'Mano'];
    $button =  "<button type='submit'>Enviar</button>";
    $form = "<form action='analisis.php' method='post'> ";
    $formc = "</form>; ";
     for ($i=0; $i < count($texto_original) ; $i++) { 
                $form .= "la palabra es: ".str_shuffle($texto_original[$i])." ".
                "<input type='text' name='palabra".$i."'>".
                "<br>";
            }
            echo $form. $button. $formc ;
                // foreach ($texto_desordenado as $index => $palabra) {
    //     echo '<label for="palabra_' . $index . '">' . $palabra . ':</label>';
    //         echo '<input type="text" placeholder="Escribe tu adivinanza" id="palabra_' . $index . '" name="palabra_adivinada[' . $index . ']">';
    //         echo '<br><br>';
    //     }
    ?>
<!-- <!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario de Adivinanza</title>
    </head>
    <body>
        <form action="" method="post">
            <label for="adivina"> Palabras a adivinar <br></label>
            <?php
            // Desordenar el array completo
          
            // $texto_desordenado = array_map('str_shuffle', $texto_original);

        ?>
        <input type="submit"  value="Enviar">
    </form>
</body>
</html>
//   if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $palabras_adivinadas = $_POST[''];

//     // Mostrar las palabras ingresadas
//     foreach ($palabras_adivinadas as $indice => $palabra) {
//         echo "Palabra $indice: " . htmlspecialchars($palabra) . "<br>";
//     }  
//     var_dump($palabras_adivinadas); // Mostrar información detallada
//     var_dump($palabra); // Mostrar información detallada


//         // Definir la función de proceso
//         function proceso($palabras_adivinadas, $texto_original) {
//             foreach ($palabras_adivinadas as $indice => $palabra_adivinada) {

//             if ($palabra_adivinada === $texto_original[$indice]) {
//                 echo "<p>¡Correcto! La palabra es " .$texto_original[$indice]   . ".</p>";
//             } else {
//                 echo "<p>Inténtalo de nuevo. </p>";
//             }
//         }
//         }

//         // Llamar a la función para procesar la adivinanza
//         proceso($palabras_adivinadas, $texto_original);
//     }


  ?>

