<?php 

/* Llamar a una funciones */
include("header.php");

/* Array para almacenar información de ejercicios */
$ejerciciosPHP = [
    [
        'imagen' => 'img/php1.jpg',
        'titulo' => 'Utilización de include',
        'descripcion' => 'Se utilizan varios archivos .php para no repetir código y likear entre sus partes.',
        'enlace' => 'Ejercicios PHP\Ejercicio 1 Web\index.php',
    ],
    [
        'imagen' => 'img/php2.jpg',
        'titulo' => 'Primer Curd',
        'descripcion' => 'Primer Crud en base de datos alojada en servidor externo.',
        'enlace' => 'https://josemanuelroldanguerrero.000webhostapp.com/my_primer_crud/index.php',
    ],

    [
        'imagen' => 'img/php4.jpg',
        'titulo' => 'Crud de Películas',
        'descripcion' => 'Crud de películas en base de datos alojada en servidor externo.',
        'enlace' => 'https://josemanuelroldanguerrero.000webhostapp.com/crud_imagenes_hostinger/index.php',
    ],

    [
        'imagen' => 'img/php5.jpg',
        'titulo' => 'Cálculo de sueldo',
        'descripcion' => 'Contrucción de aplicación para calculo de sueldos.',
        'enlace' => 'ejercicio_calculadora_sueldos/index.php',
    ],

    [
        'imagen' => 'img/php6.jpg',
        'titulo' => 'Aleatorio de Película con Array',
        'descripcion' => 'Aplicación que realiza una elección aleatoria de una frase.',
        'enlace' => 'ejercicio_random/index.php',
    ],
    
    [
        'imagen' => 'img/php7.jpg',
        'titulo' => 'Aleatorio, array asociativo multidimensional',
        'descripcion' => 'Aplicación que realiza una elección aleatoria de una frase.',
        'enlace' => 'ejercicio_multi/arrayMulti.php',
    ],

    [
        'imagen' => 'img/php8.jpg',
        'titulo' => 'Cálculo de ganancias diarias',
        'descripcion' => 'Contrucción de aplicación para calculo de ganancias diarias.',
        'enlace' => 'ejercicio_multi/arrayMulti.php',
    ],

    [
        'imagen' => 'img/php9.jpg',
        'titulo' => 'Clonar sitio web',
        'descripcion' => 'Se propone copiar un sitio web de internet y hacerlo funcional.',
        'enlace' => 'https://josemanuelroldanguerrero.000webhostapp.com/ejercicio_cuevana_hostinger/nueva_vista.php',
    ],

    [
        'imagen' => 'img/php10.webp',
        'titulo' => 'Pruebas',
        'descripcion' => 'Tarjeta en movimiento.',
        'enlace' => 'Tarjeta movimiento/index.php',
    ],
];
/* Llamada de tarjeta */
include("funcion_tarjeta.php");
?>
    <div class="h2 text-center py-5">
        Ejercicios PHP
    </div>
    <div class="container pt-5">
        <div class="row align-items-center">
            <?php
        foreach ($ejerciciosPHP as $ejercicio) {
            echo generarTarjeta($ejercicio);
        }
        ?>
        </div>
    </div>

<?php
include("footer.php");
?>