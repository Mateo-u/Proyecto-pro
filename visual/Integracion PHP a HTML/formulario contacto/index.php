<?php

function validate($name,  $email, $subject, $message){
    return !empty($name) && !empty($email) && !empty($subject) && !empty($message);
}

$status = "";
if ( isset($_POST["form"])) {
    if (validate(...$_POST)) {

        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["messaje"];

        // mandar correo

        $status = "sucess";
    } else {
        $status = "danger";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>

    <link rel="stylesheet" href="./output.css">
</head>
<body class=" bg-gradient-to-r from-green-500 via-violet-400 to-red-400 h-screen bg-cover" style="background-image: url('https://www.elespectador.com/resizer/v2/HOPAWZSQZRBBLCELZHEEV33WLE.png?auth=beaeff939ecb91b6919c38b10c0749fc1a32b164e90a9b7bdce0e90f27b3e1cc&width=910&height=606&smart=true&quality=70');">

    <?php if($status == "danger"): ?>
        <div class="max-w-lg mx-auto bg-green-500 mt-10 m-3 p-5  rounded text-center">
            <span>surgio un problema</span>
        </div>
    <?php endif; ?>

    <?php if($status == "success"): ?>
        <div class="max-w-lg mx-auto rounded m-3 p-5 bg-red-500 text-center">
            <span>Mensaje enviado con exito</span>
        </div>
    <?php endif ; ?>



    <div class="bg-white bg-opacity-70  max-w-lg mx-auto mt-10 p-6 shadow-md rounded-lg backdrop-blur-lg ">
    <form class="" action="./" method="POST">
        <h1 class="text-4xl p-2 text-center font-bold">¡Contactanos!</h1>
        <div class="flex p-2">
            <div class="mr-5 ">
                <label class="font-medium" for="name">Nombres:</label>
                <input class="p-2 rounded w-full" placeholder="ej: Carlo Aurelio" type="text" name="name" id="name">
            </div>
            <div>
                <label class="font-medium" for="lastnames">Apellidos:</label>
                <input class="p-2 rounded w-full" placeholder="ej: de duque"  type="text" name="lastnames" id="lastnames">
            </div>
        </div>
        <!-- <div class="p-2"></div>
            <label for="lastnames">Apellidos:<br></label>
            <input class="p-2 rounded" placeholder="ej: " type="text" name="lastnames" id="lastnames">
        </div> -->
        <div class="p-2">
            <label class="font-medium" for="email">Correo:<br></label>
            <input class="p-2 w-full rounded" placeholder="ej: carlos123@crack.com" type="email" name="email" id="email">
        </div>  
        <div class="p-2">
            <label class="font-medium" for="subject">Asunto:<br></label>
            <input class="p-2 w-full rounded" placeholder="ej: contratación"  type="text" name="subject" id="subject">
        </div>
        <div class="p-2">
            <label class="font-medium" for="message">Mensaje:<br></label>
            <textarea class="w-full rounded" name="message" id="message"></textarea>        
        </div>
        <div class=" pt-2 w-full text-center items-center">
            <button name="form" class="w-72 p-1.5 rounded mx-auto flex items-center justify-center" style="background-color: #479e31;" type="submit">
                Enviar
                <img  src="https://img.icons8.com/material-rounded/24/sent.png" class="mr-2" alt="Enviar" />
            </button>     
            </div>
        <div class="flex justify-between pt-5">
            <div>
                <span><i class="fa-solid fa-location-dot"></i>  calle 123n bis 134 </span>
            </div>
            
            <div>
                <span><i class="fa-solid fa-phone"></i>  30000000000</span>
            </div>
        </div>



    </form>
</div>
    <script src="https://kit.fontawesome.com/0b543d61be.js" crossorigin="anonymous"></script>
</body>
</html>