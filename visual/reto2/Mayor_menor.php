<?php
    session_start();
    $form = '<form method="POST" action="">';
    $input = '<input type="number" min="0" max="100" name="inpu">';
    $enviar = '<button type="submit">enviar</button>';   
    $cierre = '</form>';
    echo "Ingrese el numero de productos" . $form . $input. $enviar . $cierre;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['inpu'])) {
            $inpu = $_POST['inpu'];
            $_SESSION['inpu'] = $inpu;
            echo $inpu;
            echo $form;
            for ($i=0; $i < $inpu ; $i++) { 
                $select = '<select name="unidad[' . $i . ']" id="unidad"><option value="cm">cm</option><option value="m">m</option></select>';
                echo  ($i+1) . ". Producto <br>";
                echo 'Ancho <input type="number" name="Ancho[' . $i . ']">' . $select .
                ' Largo <input type="number" name="Largo[' . $i . ']">' . $select . "<br><br>";
                }
            echo $enviar;
        }
    }
    if ($_SERVER) {
        if (isset($_POST["Ancho"]) && isset($_POST["Largo"])) {
            $inpu = $_SESSION['inpu']; 
            $anchoArray = $_POST["Ancho"];
            $largoArray = $_POST["Largo"];
            $unidadArray = $_POST["unidad"]; // Unidad[] es un array
            
            for ($i=0; $i < $inpu  ; $i++) { 
                $ancho = $anchoArray[$i];
                $largo = $largoArray[$i];
                $unidad = $unidadArray[$i]; // Capturamos la unidad seleccionada
                echo ($i + 1) . " - Producto<br>";
                echo "Ancho: " . $ancho . " " . $unidad . ", Largo: " . $largo . " " . $unidad . "<br><br>";
                // echo ($i+1) . "Productos";
                // echo $ancho. $largo. "<br>";
            }
            $productosOrdenados = suma($anchoArray, $largoArray, $unidadArray);
        
        // MOSTRAMOS LOS PRODUCTOS ORDENADOS
        foreach ($productosOrdenados as $producto) {
            echo ($producto['indice'] + 1) . " - Producto<br>";
            echo "Ancho: " . $producto['ancho'] . " " . $producto['unidad'] . 
                 ", Largo: " . $producto['largo'] . " " . $producto['unidad'] . 
                 ", Suma: " . $producto['suma'] . "<br><br>";
        }
        }
    }
function suma( $anchoArray, $largoArray, $unidadArray){
    $productos = [];
    for ($i=0; $i < count($largoArray); $i++) { 
        $suma = $anchoArray[$i] + $largoArray[$i];
        $productos[] = [
           'indice' => $i, // Guardamos el índice original para mostrarlo después
            'ancho' => $anchoArray[$i],
            'largo' => $largoArray[$i],
            'unidad' => $unidadArray[$i],
            'suma' => $suma
        ];  
    }
    usort($productos, function($a, $b) {
        return $b['suma'] - $a['suma'];
    });
    return $productos; // Devolvemos el array ordenado


}
    
    ?>
