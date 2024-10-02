<?php
    // echo '<form method="POST" action="">';
    // echo "Ingrese el número de elementos: ";
    // echo '<input type="number" name="cantidad">';
    // echo '<button type="submit">Enviar</button>';
    // echo '</form>';
    $form = '<form method="POST" action="">';
    $input = '<input type="number" min="0" max="100"  name="cantidad">';
    $enviar = '<button type="submit" >Enviar</button>';
    $Cierre = '</form>';
    $input1 = '<input type="number" name="valor">';

    echo "ingrese el numero de elementos  " . $form . $input. $enviar. $Cierre;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['cantidad'])) {
            $cantidad = $_POST['cantidad'];
            // El campo 'cantidad' fue enviado y no es nulo
            echo "La cantidad de productos enviada es: " . $cantidad . "<br>";
            echo '<form method="POST" action="">';

            for ($i=0; $i < $cantidad ; $i++) {    
                echo "Ingrese el valor de el producto " . ($i+1) ."<br><br>";
                echo '<input type="number" name="valor' . $i . '" step="0.01" required><br><br>';
            };
            echo '<input type="hidden" name="cantidad" value="' . $cantidad . '">';
            echo '<button type="submit">Aplicar descuento</button>';
        } else {
            // El campo 'cantidad' no fue enviado
            echo "El campo 'cantidad' no fue enviado.";
        }
    }
    if (isset($_POST['valor0'])) {
        echo "Los valores ingresados y con el 35% de descuento son:<br>";
        for ($i = 0; $i < $cantidad; $i++) {
            $valorProducto = $_POST['valor' . $i];
            $descuento = $valorProducto * 0.35;  // Calcular el 35% de descuento
            $precioConDescuento = $valorProducto - $descuento;  // Restar el descuento
            echo "Producto " . ($i + 1) . ": Valor original = " . $valorProducto . 
                 " | Valor con descuento = " . $precioConDescuento . "<br>";
        }
    }
    
?>
