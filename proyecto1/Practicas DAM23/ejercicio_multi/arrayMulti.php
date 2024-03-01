<!-- array asociativo multidimensional. Un array asociativo multidimensional es simplemente un array q contiene otros arrays como elementos -->
<?php

$todosLasFrases = [
    1 => [
        "frase" => "Qué delicia oler napalm por la mañana",
        "imagen" => "img/1.jpg",
        "peli" => "Apocalypse Now"
    ],

    2 => [
        "frase" => "Me parece que ya no estamos en Kansas",
        "imagen" => "img/2.jpg",
        "peli" => "El mago de Oz"
    ],

    3 => [
        "frase" => "Alégrame el día",
        "imagen" => "img/3.jpg",
        "peli" => "Harry el sucio"
    ],

    4 => [
        "frase" => "Uno del censo intentó hacerme una encuesta. Me comí su hígado acompañado de habas y un buen Chianti",
        "imagen" => "img/4.jpg",
        "peli" => "El silencio de los corderos"
    ],

    5 => [
        "frase" => "¡Enséñame la pasta!",
        "imagen" => "img/5.jpg",
        "peli" => "Jerry Maguire"
    ],

    6 => [
        "frase" => "Vas a necesitar un barco muy grande",
        "imagen" => "img/6.jpg",
        "peli" => "Tiburón"
    ],

    7 => [
        "frase" => "Volveré",
        "imagen" => "img/7.jpg",
        "peli" => "Terminator"
    ],

    8 => [
        "frase" => "Mamá siempre decía: la vida es como una caja de bombones. Nunca sabes lo que te va a tocar",
        "imagen" => "img/8.jpg",
        "peli" => "Forrest Gump"
    ],

    9 => [
        "frase" => "Ya me tenías con el 'Hola'",
        "imagen" => "img/9.jpeg",
        "peli" => "Jerry Maguire"
    ],

];

$todosLosNumeros = [
    1 => [
        "numero" => "Trinity llama al 555-0690",
        "imagen" => "img/trinity.jpg",
        "peli" => "The Matrix"
    ],

    2 => [
        "numero" => "Norton llama al 555-0134",
        "imagen" => "img/norton.webp",
        "peli" => "El club de la lucha"
    ],

    3 => [
        "numero" => "Tony Soprano llama al el 555-0157",
        "imagen" => "img/tony.jpg",
        "peli" => "Los Soprano"
    ],

    4 => [
        "numero" => "John Maclain llama al 555-0001",
        "imagen" => "img/john.webp",
        "peli" => "Jungla de cristal"
    ]

];

/* Funcion para obtener la frase aleatoria */
function obtenerFraseAleatorio($arrayFrases){
/* Genera un indice aleatorio dentro del rango de los indices del array de frases */
    $indiceAleatorio = array_rand($arrayFrases);
/* La funcion devuelve un consejo aleatorio del array $todasLasFrases, y ese consejo se almacena en la variable $consejoAleatorio */
    $contenidoAleatorio = $arrayFrases[$indiceAleatorio];
    return $contenidoAleatorio; 
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multidimensional</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
if(isset($_POST['obtenerFrase'])){
    $contenidoAleatorio = obtenerFraseAleatorio($todosLasFrases);
}

if(isset($_POST['obtenerNumero'])){
    $contenidoAleatorio2 = obtenerFraseAleatorio($todosLosNumeros);
}
?>

    <div class="back-color bg-body-secondary h2 text-center py-3 shadow-lg p-3 rounded" role="alert">
        Frases aleatorias de Películas
    </div>
    <div class="container p-5 d-flex justify-content-center">
        <div class="row" style="height: 40rem;">

                <div class=" col-md-6 mx-4 card shadow-lg p-3 bg-body-tertiary rounded hover-overlay"
                    style="width: 38rem; padding: 0;">
                    <img src="<?= isset($contenidoAleatorio['imagen']) ? $contenidoAleatorio['imagen'] : 'img/cine.jpg' ?>"
                        class="img-fluid" alt="...">
                    <div class="card-body py-5" style="bottom: 0; position: absolute;">
                        <h5 class="card-title mt-4">
                            <?= isset($contenidoAleatorio['peli'])  ? $contenidoAleatorio['peli'] : 'Esperando' ?></h5>
                        <p class="card-text">
                            <?= isset($contenidoAleatorio['frase']) ? $contenidoAleatorio['frase'] : 'Esperando' ?></p>
                        <form class="mt-4" action="" method="post">
                            <button type="submit" class="btn btn-secondary shadow-lg rounded" name="obtenerFrase">Click
                                para
                                obtener</button>
                        </form>
                    </div>
                </div>

        </div>



        <div class="row" style="height: 40rem;">
            <div class="col-md-6 mx-4 card shadow-lg p-3 bg-body-tertiary rounded hover-overlay" style="width: 38rem; padding: 0;">
                <img src="<?= isset($contenidoAleatorio2['imagen']) ? $contenidoAleatorio2['imagen'] : 'img/phone.jpg' ?>"
                    class="img-fluid" alt="...">
                <div class="card-body py-5" style="bottom: 0; position: absolute;">
                    <h5 class="card-title mt-4">
                        <?= isset($contenidoAleatorio2['peli'])  ? $contenidoAleatorio2['peli'] : 'Esperando' ?></h5>
                    <p class="card-text">
                        <?= isset($contenidoAleatorio2['numero']) ? $contenidoAleatorio2['numero'] : 'Esperando' ?></p>
                    <form class="mt-4" action="" method="post">
                        <button type="submit" class="btn btn-secondary shadow-lg rounded" name="obtenerNumero">Click
                            para obtener</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>