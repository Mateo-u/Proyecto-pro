<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario POST</title>
</head>
<body>
<form action="server.php" method="post" enctype="multipart/form-data">

    <!-- input simple -->
    <!-- <label for="nombre"></label>
    <input type="text" name="nombre" id="nombre"> -->

    <!-- arreglos -->
    <!-- <label >personas</label>
    <input type="text" name="personas[]" >
    <input type="text" name="personas[]" >
    <input type="text" name="personas[]" > -->

    <!--  Arreglos asociativos -->
    
    <!-- <label >nombre de la persona</label>
    
    <input type="text" name="persona[nombre]" >
    <label >correo de la persona</label>
    
    <input type="email" name="persona[email]" >
    <label >edad de la persona</label>

    <input type="number" name="persona[edad]" > -->
    <!-- Checkbox -->
    <!-- <label >personas</label>
    <input type="checkbox" name="list1">
    <input type="checkbox" name="list2" value="Este valor fue clicado">
    <input type="checkbox" name="list3"> -->

    <!-- radios -->
     <!-- <label for="mexico">México</label>
    <input type="radio" name="pais" value="México" id="mexico">
    <label for="colombia">Colombia</label>

    <input type="radio" name="pais" value="Colombia" id="colombia">
    <label for="peru">Perú</label>

    <input type="radio" name="pais" value="Perú" id="peru"> -->

    <!-- Múltiples archivos -->

    <label for="galeria">Carga tus imagenes:</label>

    <input type="file" multiple name="galeria[]" id="galeria">
    


    <button type="submit">Mandar formulario</button>
    </form>
    
</body>
</html>