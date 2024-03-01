<?php
if (isset($_POST['enviar'])) {
    if (isset($_POST['proyecto']) && isset($_POST['selEmpleado'])) {
        $proyecto = $_POST['proyecto'];
        $selEmpleado = $_POST['selEmpleado'];
        $descripcion = $_POST['descripcion'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $horas = $_POST['horas'];

        $nombre_apellido = $nombre . ' ' . $apellido;

        $tarifa_categoria = [
            "ceo" => 25,
            "administrativo" => 16,
            "practicas" => 10
        ];

        // Calcula el salario y bonus
        $pago_hora = $tarifa_categoria[$selEmpleado];
        $salario_bruto = $pago_hora * $horas;

        $bonus = [
            "ceo" => 250,
            "administrativo" => 130,
            "practicas" => 50
        ];

        $bonus_desempeno = $bonus[$selEmpleado];
        $salario_neto = $salario_bruto + $bonus_desempeno;

        /*         Calculo de Segurdad Social */

        $seguridad_social = $salario_neto * 0.15;

        $imagen_categoria = [
            "ceo" => "img/ceo.jpg",
            "administrativo" => "img/administrativo.jpg",
            "practicas" => "img/practicas.jpg"
        ];

        $imagen = $imagen_categoria[$selEmpleado];
    } else {
        echo "Rellene todos los campos";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de sueldos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="pb-5">
        <div class="bg-success-subtle h2 text-center py-3" role="alert">
            Calculadora de Sueldos
        </div>
    </div>
    <div class="container p-5">
        <div class="row">

            <div class="col-md-6 bg-success-subtle border border-success rounded-stard">
                <form method="POST" action="" class="bg-success-subtle">
                    <div class="my-3">
                        <label for="proyecto" class="form-label my-3">Proyecto</label>
                        <input type="text" name="proyecto" class="form-control" id="proyecto"
                            aria-describedby="emailHelp" requared>
                        <label for="descripcion" class="form-label my-3">Descripción</label>
                        <textarea type="text" name="descripcion" class="form-control" id="descripcion"
                            aria-describedby="emailHelp"></textarea>
                        <div class="row">
                            <div class="col-6">
                                <label for="nombre" class="form-label my-3">Nombre trabajador</label>
                                <input type="text" name="nombre" class="form-control" id="nombre"
                                    aria-describedby="emailHelp" requared>
                            </div>
                            <div class="col-6">
                                <label for="apellido" class="form-label my-3">Apellido del trabajador</label>
                                <input type="text" name="apellido" class="form-control" id="apellido"
                                    aria-describedby="emailHelp" requared>
                            </div>
                            <div class="col-6">
                                <label for="horas" class="form-label my-3">Horas trabajadas</label>
                                <input type="number" name="horas" class="form-control" id="horas"
                                    aria-describedby="emailHelp" requared>
                            </div>
                            <div class="col-6">
                                <label for="selEmpleado" class="form-label my-3">Categoria Trabajador</label>
                                <select class="form-select" name="selEmpleado" aria-label="Default select example">
                                    <option selected>Selecciona una opción</option>
                                    <option value="ceo">CEO</option>
                                    <option value="administrativo">Administrativo</option>
                                    <option value="practicas">Prácticas</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="enviar" class="btn btn-success my-3">Enviar</button>
                    <button type="submit" name="limpiar" input="reset" class="btn btn-success my-3">Limpiar</button>
                </form>
            </div>
            <!-- 2. se crea la vista de card -->
            <div class="col-md-6 bg-success-subtle border border-success rounded-end">
                <img src="<?= isset($imagen) ? $imagen : 'img/ceo.jpg' ?>" class="img-fluid w-100" alt="...">
                <div class="card-body py-3">
                    <h5 class="card-title"><?= isset($proyecto) ? $proyecto : 'Introduce tu proyecto' ?></h5>
                    <p class="card-text py-3"><?= isset($descripcion) ? $descripcion : 'Introducir descripción' ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Trabajador:
                        </b><?= isset($nombre_apellido) ? $nombre_apellido : '' ?></li>
                    <li class="list-group-item"><b>Categoria: </b><?= isset($selEmpleado) ? $selEmpleado : '' ?></li>
                    <li class="list-group-item"><b>Horas Trabajadas: </b><?= isset($horas) ? $horas . " horas"  : '' ?>
                    </li>
                    <li class="list-group-item"><b>Bonus desempeño:
                        </b><?= isset($bonus_desempeno) ? $bonus_desempeno . " €" : '' ?></li>
                    <li class="list-group-item"><b>Seguridad Social:
                        </b><?= isset($seguridad_social) ? $seguridad_social . " €" : '' ?></li>
                    <li class="list-group-item"><b>Salario Bruto:
                        </b><?= isset($salario_bruto) ? $salario_bruto . " €" : '' ?></li>
                    <li class="list-group-item"><b>Salario Neto:
                        </b><?= isset($salario_neto) ? $salario_neto . " €" : '' ?>
                    </li>
                </ul>

            </div>

        </div>
    </div>

    <script>
    history.replaceState(null, null, location.pathname);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    /* Evita que vuelva a enviarse los datos del formulario */
    </script>
</body>

</html>