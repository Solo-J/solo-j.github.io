<?php 

/* Llamar a una funciones */
include("header.php");

/* Array para almacenar información de ejercicios */
$ejerciciosJavaScript = [
    [
        'imagen' => 'img/javaScript1.jpg',
        'titulo' => 'Saludo personalizado 1',
        'descripcion' => 'Programa que solicite al usuario su nombre y luego muestre un mensaje
        de saludo personalizado en un cuadro de diálogo.',
        'enlace' => 'Ejercicios JavaScript/1Ejercicio1SaludoPersonalizado.html',
    ],
    [
        'imagen' => 'img/javaScript2.jpg',
        'titulo' => 'Elegir una opción',
        'descripcion' => 'Programa que pregunte al usuario si le gusta el color rojo. Dependiendo de su
        respuesta, muestra un mensaje en un cuadro de diálogo.',
        'enlace' => 'Ejercicios JavaScript/2Ejercicio2ElegirUnaOpcion.html',
    ],
    [
        'imagen' => 'img/javaScript3.jpg',
        'titulo' => 'Dejar un comentario',
        'descripcion' => 'Crea un programa que solicite al usuario que deje un comentario y luego muestre el comentario en
        un cuadro de diálogo.',
        'enlace' => 'Ejercicios JavaScript/3Ejercicio3DejaUnComentario.html',
    ],
    [
        'imagen' => 'img/javaScript4.jpg',
        'titulo' => 'Saludo personalizado 2',
        'descripcion' => 'Crea un programa que solicite al usuario su nombre y, si el nombre es "Luisa", muestra un
        mensaje de bienvenida personalizado.',
        'enlace' => 'Ejercicios JavaScript/4Ejercicio91SaludoPersonalizado.html',
    ],
    [
        'imagen' => 'img/javaScript5.jpg',
        'titulo' => 'Solicita al usuario que ingrese una contraseña',
        'descripcion' => 'Si la contraseña ingresada es "secreta123", muestra un mensaje de acceso concedido.',
        'enlace' => 'Ejercicios JavaScript/5Ejercicio92ValidacionContraseña.html',
    ],
    [
        'imagen' => 'img/javaScript6.jpg',
        'titulo' => 'Clasificación de números',
        'descripcion' => ' Crea un programa que solicite al usuario ingresar un número entero.',
        'enlace' => 'Ejercicios JavaScript/6Ejercicio93ClasificacionDeNumeros.html',
    ],
    [
        'imagen' => 'img/javaScript7.jpg',
        'titulo' => 'Combinación de Condiciones con AND (&&)',
        'descripcion' => 'Crea un programa que solicite al usuario su nombre y si son
        estudiantes.',
        'enlace' => 'Ejercicios JavaScript/7Ejercicio101ConvinacionCondiciones.html',
    ],
    [
        'imagen' => 'img/javaScript8.jpg',
        'titulo' => 'Evaluación de Notas Escolares',
        'descripcion' => 'Crea un programa que solicite al usuario su nota en un examen (un número entre
        0 y 100).',
        'enlace' => 'Ejercicios JavaScript/8Ejercicio102EvaluacionNotas.html',
    ],
    [
        'imagen' => 'img/javaScript9.jpg',
        'titulo' => 'Verificación doble',
        'descripcion' => 'Crear un programa con el que podamos verificar si un usuario es mayor de edad (18 años) y
        tiene carnet para acceder a ciertas funcionalidades.',
        'enlace' => 'Ejercicios JavaScript/9Ejercicio103VerificacionDoble.html',
    ],
    [
        'imagen' => 'img/javaScript10.jpg',
        'titulo' => 'Notificaciones',
        'descripcion' => 'Supongamos que estamos desarrollando una aplicación de redes sociales y queremos permitir que
        los usuarios desactiven las notificaciones.',
        'enlace' => 'Ejercicios JavaScript/10Ejercicio104Notificaciones.html',
    ],
    [
        'imagen' => 'img/javaScript11.jpg',
        'titulo' => 'Bucle FOR',
        'descripcion' => 'Escribe un bucle for que recorra los números del 1 al 10, inclusive. En cada iteración, muestra
        el valor del contador i.',
        'enlace' => 'Ejercicios JavaScript/11Ejercicio11BucleFor.html',
    ],
    [
        'imagen' => 'img/javaScript12.jpg',
        'titulo' => 'Bucle WHILE',
        'descripcion' => 'Programa que solicite al usuario ingresar un número mediante un cuadro de diálogo
        (prompt).',
        'enlace' => 'Ejercicios JavaScript/12Ejercicio121BucleWhile.html',
    ],
    [
        'imagen' => 'img/javaScript13.jpg',
        'titulo' => 'Bucle WHILE 2',
        'descripcion' => 'Aplicación web que permita al usuario buscar un número específico dentro de una lista
        predefinida de números.',
        'enlace' => 'Ejercicios JavaScript/13Ejercicio122BucleWhile2.html',
    ],
    [
        'imagen' => 'img/javaScript14.jpg',
        'titulo' => 'Funciones',
        'descripcion' => 'Crear un documento html con un script que defina una función que, dado un número del 1 al 7.',
        'enlace' => 'Ejercicios JavaScript\14Ejercicio15Funciones.html',
    ],
    [
        'imagen' => 'img/javaScript15.jpg',
        'titulo' => 'Movimiento',
        'descripcion' => 'Pulsa las teclas flecha inzquierda o a para que nuestro cuadrado se vuelva rosa.',
        'enlace' => 'Ejercicios JavaScript/15EjemploArrows.html',
    ],
    [
        'imagen' => 'img/javaScript16.jpg',
        'titulo' => 'Menú Hamburgesa',
        'descripcion' => 'Se realiza un ejemplo de menu Hamburgesa.',
        'enlace' => 'Ejercicios JavaScript\16MenuHamburgesa.html',
    ],
];
/* Llamada de tarjeta */
include("funcion_tarjeta.php");
?>
    <div class="h2 text-center py-5">
        Ejercicios JavaScript
    </div>
    <div class="container pt-5">
        <div class="row align-items-center">
            <?php
        foreach ($ejerciciosJavaScript as $ejercicio) {
            echo generarTarjeta($ejercicio);
        }
        ?>
        </div>
    </div>


<?php
include("footer.php");
?>