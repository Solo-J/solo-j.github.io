    <?php 

/* Llamar a una funciones */
include("header.php");

/* Array para almacenar información de ejercicios */
$ejerciciosHTML = [
    [
        'imagen' => 'img/html1.jpg',
        'titulo' => 'Web uno',
        'descripcion' => 'Se escribe en código la página representada de una captura.',
        'enlace' => 'Prueba27Resuelta/index.html',
    ],
    [
        'imagen' => 'img/html2.jpg',
        'titulo' => 'Formulario',
        'descripcion' => 'Realizar un formulario.',
        'enlace' => 'Ejercicio 12 29_09 Formulario/formulario.html',
    ],
    [
        'imagen' => 'img/html3.jpg',
        'titulo' => 'Mapa',
        'descripcion' => 'Realizar mapa con localización y embebido.',
        'enlace' => 'Ejercicio 14 03_10 insertar mapa/practica.html',
    ],
    [
        'imagen' => 'img/html4.jpg',
        'titulo' => 'Botón',
        'descripcion' => 'Crear un botón.',
        'enlace' => 'Ejercicio 26 03_10 botones/botones.html',
    ],
    [
        'imagen' => 'img/html5.jpg',
        'titulo' => 'Web dos',
        'descripcion' => 'Se escribe en código la página representada de una captura.',
        'enlace' => 'Prueba 31 Resuelta/index.html',
    ],
    [
        'imagen' => 'img/html6.jpg',
        'titulo' => 'Web tres',
        'descripcion' => 'Se escribe en código la página representada de una captura.',
        'enlace' => 'Prueba 31 Resuelta 2/index.html',
    ],
    [
        'imagen' => 'img/html7.jpg',
        'titulo' => 'Web cuatro',
        'descripcion' => 'Se escribe en código la página representada de una captura.',
        'enlace' => 'Ejercicios JavaScript/Prueba 1 18_10\index.html',
    ],
];
/* Llamada de tarjeta */
include("funcion_tarjeta.php");

?>
    <div class="h2 text-center py-5">
        Ejercicios HTML
    </div>
    <div class="container pt-5">
        <div class="row align-items-center">
            <?php
        foreach ($ejerciciosHTML as $ejercicio) {
            echo generarTarjeta($ejercicio);
        }
        ?>
        </div>
    </div>

<?php
include("footer.php");
?>