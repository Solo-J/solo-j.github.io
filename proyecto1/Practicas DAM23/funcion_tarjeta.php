<?php
/* Funcion para la creación de tarjeta */
function generarTarjeta($ejercicio)
{
    return 
    "<div class='col-12 col-md-6 col-lg-4 col-xl-3-w-50 col-xxl-3'>
        <div class='card p-3 glass my-4 mx-auto' style='width: 18rem; padding: 0;'>
            <img src='{$ejercicio['imagen']}' class='img-fluid' alt='...'>
            <div class='card-body'>
                <h5 class='card-title mt-4'>{$ejercicio['titulo']}</h5>
                <p class='card-text'>{$ejercicio['descripcion']}</p>
                <div class='mt-4'>
                    <a href='{$ejercicio['enlace']}' target='_blank'>
                        <button type='submit' class='btn btn-secondary shadow-lg rounded' name=''>Ver más</button>
                    </a>
                </div>
            </div>
        </div>
    </div>";
}
?>