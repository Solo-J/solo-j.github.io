<?php 

/* Llamar a una funciones */
include("header.php");

/* Array para almacenar información de ejercicios */
$ejerciciosPlantillas = [
    [
        'imagen' => 'img/plantilla1.jpg',
        'titulo' => 'Plantilla original 1',
        'descripcion' => 'Se utiliza de referencia.',
        'enlace' => 'Ejemplo Bootstrap/Plantilla 1/Agency-gh-pages-original/index.html',
    ],
    [
        'imagen' => 'img/modificado1.jpg',
        'titulo' => 'Plantilla modificada 1',
        'descripcion' => 'Modificación sencilla.',
        'enlace' => 'Ejemplo Bootstrap/Plantilla 1/Agency-gh-pages-modificado/index.html',
    ],

    [
        'imagen' => 'img/plantilla2.jpg',
        'titulo' => 'Plantilla original 2',
        'descripcion' => 'Se utiliza de referencia.',
        'enlace' => 'Ejemplo Bootstrap/Plantilla 2/MyPortfolio-original/index.html',
    ],

    [
        'imagen' => 'img/modificado2.jpg',
        'titulo' => 'Plantilla modificada 2',
        'descripcion' => 'Modificación de plantilla más notoria.',
        'enlace' => 'Ejemplo Bootstrap/Plantilla 2/MyPortfolio-modificado/index.html',
    ],

];
/* Llamada de tarjeta */
include("funcion_tarjeta.php");
?>
    <div class="h2 text-center py-5">
        Ejercicios Plantillas
    </div>
    <div class="container pt-5">
        <div class="row align-items-center">
            <?php
        foreach ($ejerciciosPlantillas as $ejercicio) {
            echo generarTarjeta($ejercicio);
        }
        ?>
        </div>
    </div>

<?php
include("footer.php");
?>