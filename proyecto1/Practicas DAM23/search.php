<?php
include("funcion_tarjeta.php");  // Incluye tu archivo con la función de tarjeta
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

function buscarEjercicioPorTitulo($array, $tituloBuscado) {
    foreach ($array as $ejercicio) {
        if ($ejercicio['titulo'] === $tituloBuscado) {
            return $ejercicio;
        }
    }
    return null; // Retorna null si el ejercicio no se encuentra
}

// Obtener el título a buscar desde el formulario
$tituloBuscado = isset($_POST['titulo_buscado']) ? $_POST['titulo_buscado'] : '';

// Buscar el ejercicio por título
$ejercicioEncontrado = buscarEjercicioPorTitulo($ejerciciosHTML, $tituloBuscado);

// Puedes imprimir o redirigir según tus necesidades
if ($ejercicioEncontrado) {
    echo "Ejercicio encontrado: ";
    echo generarTarjeta($ejercicioEncontrado);
} else {
    echo "Ejercicio no encontrado";
}
?>