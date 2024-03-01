<?php
if(isset($_POST['calcular'])){
/*     Verifica que se ha enviado el formulario */
    if (isset($_POST['nombre']) && isset($_POST['magia']) && isset($_POST['nivel']) && isset($_POST['resistencia']) && isset($_POST['mision'])){

        $nombre = $_POST['nombre'];
        $magia = $_POST['magia'];
        $nivel = $_POST['nivel'];
        $resistencia = $_POST['resistencia'];
        $mision = $_POST['mision'];
        
        $poderes = [
            "fuego" => 10,
            "hielo" => 12,
            "aire" => 8
        ];
        
        $misiones = [
            "exploracion" => 20,
            "combate" => 12,
            "rescate" => 8
        ];
        
/*         Calculo de poder total */
        $podertotal = $nivel + $resistencia + $poderes[$magia] + $misiones[$mision];

/*         Daño inflingido */
        $dañoinflingido = 0.8 * $podertotal;
        
        $imagenPorCategoria = [
            "fuego" => "img/mago_fuego.jpg",
            "hielo" => "img/mago_hielo.jpg",
            "aire" => "img/mago_aire.jpg"
        ];
        
        $imagen = $imagenPorCategoria[$magia];
        
}else {
    echo "<div class='text-danger-emphasis'>Introducir valores, por favor</div>";
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen 29 de Enero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>



    <div class="pb-5">
        <div class="bg-warning-subtle h2 text-center py-3" role="alert">
            Calculadora de poder mágico
        </div>
    </div>
    <div class="container p-5 bg-warning-subtle">
        <div class="row">
<!--             Formulario -->
            <form method="POST" action="" class="col-md-6 col-sm-12">



                <div class="col-md-12 col-sm-6">
                    <label for="nombre" class="form-label my-3" style="">Nombre del Mago</label>
                    <input type="text" name="nombre" class="form-control mt-4" id="nombre" aria-describedby="emailHelp" required>
                </div>


                <div class="col-md-12 col-sm-6">
                    <label for="magia" class="form-label my-3">Tipo de habilidad Mágica</label>
                    <select class="form-select" name="magia" aria-label="Default select example" >
                        <option selected value="fuego">Fuego</option>
                        <option value="hielo">Hielo</option>
                        <option value="aire">Aire</option>
                    </select>
                </div>




                <div class="row">
                    <div class="col-md-6 col-sm-6">


                        <label for="nivel" class="form-label my-3">Nivel del mago</label>

                        <input type="number" name="nivel" class="form-control mt-4" id="nivel"
                            aria-describedby="emailHelp" required>


                    </div>

                    <div class="col-md-6 col-sm-6">


                        <label for="resistencia" class="form-label my-3">Resistencia mágica</label>

                        <input type="number" name="resistencia" class="form-control mt-4" id="resistencia"
                            aria-describedby="emailHelp" required>

                    </div>

                </div>

                <div class="col-md-12 col-sm-6">
                    <label for="mision" class="form-label my-3">Tipo de misión</label>
                    <select class="form-select" name="mision" aria-label="Default select example" required>
                        <option selected value="exploracion">Exploración</option>
                        <option value="combate">Combate</option>
                        <option value="rescate">Rescate</option>
                    </select>
                </div>
                <button type="submit" name="calcular" class="btn btn-warning my-3">Calcular poder mágico</button>
                <button type="submit" name="limpiar" input="reset" class="btn btn-warning my-3">Limpiar</button>
            </form>

            <!-- Vista de card -->
            <div class="col-md-6 bg-warning-subtle">
                <img class="img-fluid" src="<?= isset($imagen) ? $imagen : 'img/birds.jpg' ?>" alt="...">
                <div class="card-body py-3">
                    <h5 class="card-title"><?= isset($mision) ? $mision : 'Esperando Asignación de misión' ?></h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?= isset($magia) ? 'Habilidad Mágica:   ' . $magia : 'Habilidad Mágica' ?></li>
                        <li class="list-group-item"><?= isset($nombre) ? 'Mago: ' . $nombre : 'Mago' ?></li>
                        <li class="list-group-item"><?= isset($nivel) ? 'Nivel:  ' . $nivel : 'Nivel' ?></li>
                        <li class="list-group-item text-primary"><?= isset($podertotal) ? 'Poder Total:  ' . $podertotal : 'Poder Total' ?></li>
                        <li class="list-group-item text-danger"><?= isset($dañoinflingido) ? 'Daño Inflingido:  ' . $dañoinflingido: 'Daño Inflingido' ?></li>
                    </ul>
                </div>

            </div>

        </div>

    </div>


    <script>
    history.replaceState(null, null, location.pathname);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>


</body>

</html>