<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitizando datos</title>
</head>
<body>

<form action="server.php" method="post">

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre">

    <label for="username">username:</label>
    <input type="text" name="username" id="username">s

    <label for="email">correo:</label>
    <input type="text" name="email" id="email">

    <label for="age">Edad:</label>
    <input type="text" name="age" id="age">


    <button name="form" type="submit">Mandar formulario</button>
</form>
    
</body>
</html>