    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $num_altura = $_POST['alto'];
        $altura = (int)$num_altura;

        $acumulador = " ";
        $space = " ";
    

        for ($i=0; $i < $altura; $i++) { 
            $acumulador .= "*";
            $space .= "_    ";
            echo $space .$acumulador . "<br>";
        }
    }
        ?>  