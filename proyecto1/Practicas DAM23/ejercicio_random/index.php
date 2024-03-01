<?php

$selConsejos = array("Qué delicia oler napalm por la mañana",
 "Me parece que ya no estamos en Kansas", 
 "Alégrame el día", 
 "Uno del censo intentó hacerme una encuesta. Me comí su hígado acompañado de habas y un buen Chianti", 
 "¡Enséñame la pasta!", 
 "Vas a necesitar un barco muy grande", 
 "Volveré", 
 "Mamá siempre decía: la vida es como una caja de bombones. Nunca sabes lo que te va a tocar", 
 "Ya me tenías con el 'Hola'");
$selNumero = array("Trinity llama al 555-0690",
    "Norton llama al 555-0134",
    "Tony Soprano llama al el 555-0157",
    "John Maclain llama al 555-0001");
    $imagenConsejo = [
        "Qué delicia oler napalm por la mañana" => "img/1.jpg",
        "Me parece que ya no estamos en Kansas" => "img/2.jpg",
        "Alégrame el día" => "img/3.jpg",
        "Uno del censo intentó hacerme una encuesta. Me comí su hígado acompañado de habas y un buen Chianti" => "img/4.jpg",
        "¡Enséñame la pasta!" => "img/5.jpg",
        "Vas a necesitar un barco muy grande" => "img/6.jpg",
        "Volveré"  => "img/7.jpg",
        "Mamá siempre decía: la vida es como una caja de bombones. Nunca sabes lo que te va a tocar" => "img/8.jpg", 
        "Ya me tenías con el 'Hola'" => "img/9.jpeg"
    
    ];
    $imagenNumero = [
        "Trinity llama al 555-0690" => "img/trinity.jpg",
        "Norton llama al 555-0134" => "img/norton.webp",
        "Tony Soprano llama al el 555-0157" => "img/tony.jpg",
        "John Maclain llama al 555-0001" => "img/john.webp"
    ];
/* Funcion para obterner cita aleatoria */
 function obtenerAleatorio($arrayConsejos){
/* array_rand($arrayConsejos): Esta funcion de PHP toma un arry como argumento y devueulve un indice aleatorio del array.
Aqui, se asigna la cita correspodiente al indice aleatorio seleccionado del array de citas a la variable $consejoAleatorio. Esto significa que $consejoAleatorio ahora contiene una cita seleccionada aleatoriamente */
    $consejoAleatorio = $arrayConsejos[array_rand($arrayConsejos)];
    return $consejoAleatorio;
 }


 if(isset($_POST['consejo'])){

    $consejoAleatorio = obtenerAleatorio($selConsejos);
    // Obtener la ruta de la imagen asociada al consejo
    $imagenSeleccionada = $imagenConsejo[$consejoAleatorio];



 }

/*  function obtenerNumeroAleatorio($arrayNumero){

 $numeroAleatorio = $arrayNumero[array_rand($arrayNumero)];
 return $numeroAleatorio;

 } */
if(isset($_POST['numero'])){


    $numeroAleatorio = obtenerAleatorio($selNumero);
    // Obtejer la ruta de la imagen asociada al numero
    $imagenSeleccionada2 = $imagenNumero[$numeroAleatorio];
}


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galleta de la fortuna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="bg-info-subtle h2 text-center py-3" role="alert">
        Aleatorio de película
    </div>
    <div class="container p-5">
        <div class="row">
            <div class=" col-md-6 p-5">
                <div class="card" style="width: 38rem;">
                    <img src="<?= isset($imagenSeleccionada) ? $imagenSeleccionada : 'img/cine.jpg' ?>" class="card-img-top w-80"
                        alt="...">
                    <div class="card-body">
                        <h1 class="text-primary">Frases de peliculas</h1>
                        <p class="card-text">Frase recordada</p>
                        <p class="card-text"><?= isset($consejoAleatorio) ? $consejoAleatorio : ' ' ?></p>
                        <form action="" method="post">
                            <button class="btn btn-primary my-5" type="submit" name="consejo">Obtener</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6 p-5">
                <div class="card" style="width: 38rem;">
                    <img src="<?= isset($imagenSeleccionada2) ? $imagenSeleccionada2 : 'img/phone.jpg' ?>" class="card-img-top w-80" alt="...">
                    <div class="card-body">
                        <h1 class="text-primary">Números de películas</h1>
                        <p class="card-text">Número de teléfono</p>
                        <p class="card-text"><?= isset($numeroAleatorio) ? $numeroAleatorio  : ' ' ?></p>
                        <form action="" method="post">
                            <button class="btn btn-primary my-5" type="submit" name="numero">Obtener</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>