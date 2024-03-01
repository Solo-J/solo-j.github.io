<?php 

/* Llamar a una funciones */
include("header.php");

/* Array para almacenar información de ejercicios */
$ejerciciosExamenes = [
    [
        'imagen' => 'img/examen1.jpg',
        'titulo' => 'Examen 1',
        'descripcion' => '02 de Febrero de 2023',
        'enlace' => 'Examenes/Examen1/examen1.html',
    ],
    [
        'imagen' => 'img/examen2.jpg',
        'titulo' => 'Examen 2',
        'descripcion' => '29 de Enero de 2024',
        'enlace' => 'Examenes/Examen2/index.php',
    ],


];
/* Llamada de tarjeta */
include("funcion_tarjeta.php");
?>
    <div class="h2 text-center py-5">
        Ejercicios Examenes
    </div>
    <div class="container pt-5">
        <div class="row align-items-center">
            <?php
        foreach ($ejerciciosExamenes as $ejercicio) {
            echo generarTarjeta($ejercicio);
        }
        ?>
        </div>
    </div>

<?php
include("footer.php");
?>