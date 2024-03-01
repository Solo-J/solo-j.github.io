<?php
if(isset($_POST['calcular'])){
    if (isset($_POST['menu1']) && isset($_POST['menu2']) && isset($_POST['menu3']) && isset($_POST['menu4']) && isset($_POST['propinas']) && isset($_POST['camareros'])){
$menu1 = $_POST['menu1'];
$menu2 = $_POST['menu2'];
$menu3 = $_POST['menu3'];
$menu4 = $_POST['menu4'];
$propinas = $_POST['propinas'];
$camareros = $_POST['camareros'];

/* valor a variables */
$precio_menu1 = $menu1 * 9.99;
$precio_menu2 = $menu2 * 12.90;
$precio_menu3 = $menu3 * 14.50;
$precio_menu4 = $menu4 * 20.20;

$ventas_totales = $precio_menu1 + $precio_menu2 + $precio_menu3 + $precio_menu4;
$iva = $ventas_totales * 0.10; // IVA del 10%
$total_iva = $iva + $ventas_totales;

$propinas = $propinas * 0.15; // 15% incremental al precio de menú

$empresario = $total_iva * 0.50;
$camarero_propina = $propinas / $camareros;
$parteCamarero = ($total_iva - $empresario) / $camareros;
$total_final = $total_iva - $camarero_propina - $empresario;


}else {
    echo "<div class='text-danger-emphasis'>Introducir valores</div>";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio restaurante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="pb-5">
        <div class="bg-success-subtle h2 text-center py-3" role="alert">
            Cálculo de ganancia diaria
        </div>
    </div>
    <div class="container p-5 bg-success-subtle">
        <div class="row">
            <form method="POST" action="" class="col-md-6 col-sm-12">
                <div class="row">


                    <div class="col-md-6 col-sm-6">
                        <label for="menu1" class="form-label my-3" style="">Menú 1 (9,99 €)</label>
                        <img src="img/menu1.jpg" class="img-fluid img" alt="">
                        <input type="number" name="menu1" class="form-control mt-4" id="menu1"
                            aria-describedby="emailHelp" requared>
                    </div>


                    <div class="col-md-6 col-sm-6">
                        <label for="menu2" class="form-label my-3">Menú 2 (12,90 €)</label>
                        <img src="img/menu2.jpg" class="img-fluid img" alt="">
                        <input type="number" name="menu2" class="form-control mt-4" id="menu2"
                            aria-describedby="emailHelp" requared>
                    </div>



                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">


                        <label for="menu3" class="form-label my-3">Menú 3 (14,50 €)</label>
                        <img src="img/menu3.jpg" class="img-fluid img" alt="">
                        <input type="number" name="menu3" class="form-control mt-4" id="menu3"
                            aria-describedby="emailHelp" requared>


                    </div>

                    <div class="col-md-6 col-sm-6">


                        <label for="menu4" class="form-label my-3">Menú 4 (20,20 €)</label>
                        <img src="img/menu4.jpg" class="img-fluid img" alt="">
                        <input type="number" name="menu4" class="form-control mt-4" id="menu4"
                            aria-describedby="emailHelp" requared>

                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">


                        <label for="propinas" class="form-label my-3">Propinas del día</label>
                        <img src="img/tips.jpg" class="img-fluid img" alt="">
                        <input type="number" name="propinas" class="form-control mt-4" id="propinas"
                            aria-describedby="emailHelp">


                    </div>


                    <div class="col-md-6 col-sm-6">

                        <label for="camareros" class="form-label my-3">Número de camareros</label>
                        <img src="img/creew.jpg" class="img-fluid img" alt="">
                        <input type="number" name="camareros" class="form-control mt-4" id="camareros"
                            aria-describedby="emailHelp">

                    </div>
                </div>
                <button type="submit" name="calcular" class="btn btn-success my-3">Calcular</button>
            </form>

            <!-- 2. se crea la vista de card -->


                <div class="col-md-6 bg-success-subtle">
                    <img src="img/creew.jpg" class="img-fluid" alt="...">
                    <div class="card-body py-3">
                        <h5 class="card-title">Desglose de ventas</h5>
                        <p class="card-text pt-3"> Ventas de menu 1:
                            <?= isset($precio_menu1) ? number_format($precio_menu1, 2)  . ' €' : ' ' ?>
                        </p>
                        <p class="card-text"> Ventas de menu 2:
                            <?= isset($precio_menu2) ? number_format($precio_menu2, 2)  . ' €' : ' ' ?>
                        </p>
                        <p class="card-text"> Ventas de menu 3:
                            <?= isset($precio_menu3) ? number_format($precio_menu3, 2)  . ' €' : ' ' ?>
                        </p>
                        <p class="card-text"> Ventas de menu 4:
                            <?= isset($precio_menu4) ? number_format($precio_menu4, 2)  . ' €' : ' ' ?>
                        </p>
                    </div>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Ventas totales:
                            </b><?= isset($ventas_totales) ? $ventas_totales : '' ?></li>
                        <li class="list-group-item"><b>IVA (10%): </b><?= isset($iva) ? number_format($iva, 2) : '' ?>
                        </li>
                        <li class="list-group-item"><b>Total con IVA:
                            </b><?= isset($total_iva) ? $total_iva . " horas"  : '' ?>
                        </li>
                        <li class="list-group-item"><b>Propinas del día:
                            </b><?= isset($propinas) ? number_format($propinas, 2) . " €" : '' ?></li>
                        <li class="list-group-item"><b>Parte para el empresario (50%):
                            </b><?= isset($empresario) ? number_format($empresario, 2) . " €" : '' ?></li>
                        <li class="list-group-item"><b>Parte para cada camarero:
                            </b><?= isset($parteCamarero) ? number_format($parteCamarero, 2) . " €" : '' ?></li>
                        <li class="list-group-item"><b>Total Final:
                            </b><?= isset($total_final) ? number_format($total_final, 2) . " €" : '' ?>
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
    </script>


</body>

</html>