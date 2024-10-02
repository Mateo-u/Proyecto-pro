<?php

    $usuarios = [
        array(
            "id"=> 0,
            "username" => "Mrmichi"
        ),
        array(
            "id"=> 1,
            "username" => "Retax"
        ),
        array(
            "id"=> 2,
            "username" => "Pancho"
        ),
    ];

    $edad_de_peppito = 12;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <script>
        let users = JSON.parse('<?= json_encode($usuarios) ?>');
        console.log(users)

        let edadDePepito = <?= $edad_de_peppito ?>;

        console.log
        
    </script>
    
</body>
</html>