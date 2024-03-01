<?php 

/* Llamar a una funciones */
include("header.php");

/* Array para almacenar información de ejercicios */
$ejerciciosMYSQL = [
    [
        'imagen' => 'img/bd_entidad.jpg',
        'titulo' => 'Prácticas Entidad Relación',
        'descripcion' => 'Varios ejercicios realizados en clase de modelos relacionales.',
        'enlace' => 'MySQL/Ejercicio 1/Ejercicio1MySQL.html',
    ],
    [
        'imagen' => 'img/mysql2.jpg',
        'titulo' => 'Prácticas de consultas en BBDD',
        'descripcion' => 'Se realizan varias consultas en base de datos.',
        'enlace' => 'MySQL/Ejercicios Base datos/PracticaBd1.html',
    ],

    
];
/* Llamada de tarjeta */
include("funcion_tarjeta.php");
?>
    <div class="h2 text-center py-5">
        Ejercicios MySQL
    </div>
    <div class="container pt-5">
        <div class="row align-items-center">
            <?php
        foreach ($ejerciciosMYSQL as $ejercicio) {
            echo generarTarjeta($ejercicio);
        }
        ?>
        </div>
    </div>

<?php
include("footer.php");
?>