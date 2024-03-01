<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso DAM ejercicios</title>
    <link rel="icon" href="img/Lg.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="p-3 mb-3 border-bottom" id="site-header">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="../index.html" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                    <img class="bi me-4" width="60" height="60" role="img" src="img/Lg.png" alt="">
                </a>
<?php
// Obtén la ruta del archivo actual
$current_page = basename($_SERVER['PHP_SELF']);
?>

<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
    <li><a href="../index.html" class="nav-link px-2 link-body-emphasis <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Inicio</a></li>
    <li><a href="html.php" class="nav-link px-2 link-body-emphasis <?php echo ($current_page == 'html.php') ? 'active' : ''; ?>">HTML</a></li>
    <li><a href="javaScript.php" class="nav-link px-2 link-body-emphasis <?php echo ($current_page == 'javaScript.php') ? 'active' : ''; ?>">JavaScript</a></li>
    <li><a href="mysql.php" class="nav-link px-2 link-body-emphasis <?php echo ($current_page == 'mysql.php') ? 'active' : ''; ?>">MySQL</a></li>
    <li><a href="php.php" class="nav-link px-2 link-body-emphasis <?php echo ($current_page == 'php.php') ? 'active' : ''; ?>">PHP</a></li>
    <li><a href="plantillas.php" class="nav-link px-2 link-body-emphasis <?php echo ($current_page == 'plantillas.php') ? 'active' : ''; ?>">Plantillas</a></li>
    <li><a href="examenes.php" class="nav-link px-2 link-body-emphasis <?php echo ($current_page == 'examenes.php') ? 'active' : ''; ?>">Examenes</a></li>
</ul>

<!--                 <form action="search.php" method="post" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                <label for="titulo_buscado"></label>
                    <input type="search" class="form-control" placeholder="Buscar Ejercicio" id="titulo_buscado" aria-label="Search">
                </form> -->

                <div class="dropdown text-end">
                    <ul class="dropdown-menu text-small">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    
