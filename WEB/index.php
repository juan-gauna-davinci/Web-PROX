<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="style/style.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap"> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css" />
    <title>Tesla</title>
</head>
<body>
    <!-- HTML -->
<?php
require_once "header.php"
?>

<main>

<?php
$arr_imagenes = ["img/banner1.png","img/banner2.png","img/cargador.png"];

$arr_textoAbajo = ["Wall Connector","La forma más rápida de cargar en casa","Wall Connector es la solución de carga más conveniente para casas, apartamentos, propiedades hoteleras y lugares de trabajo.","Los conectores de pared pueden compartir energía para maximizar la capacidad eléctrica existente, distribuyendo automáticamente la energía para cargar varios autos simultáneamente."];

for($i = 0 ; $i < 2 ; $i++){

$autito='<div class="carousel-item active">
            <img src="'.$arr_imagenes[$i].'" alt="Banner 1" width="1920" height="510" class="d-block img-fluid"/>
        </div>
        ';
}

$index_imagenes ='<div class="mb-auto">
        <!-- Banners -->
        <div class="carousel slide " id="principal-carousel" data-ride="carousel">
            <!-- Indicadores -->
            <ol class="carousel-indicators">
                <li data-target="#principal-carousel" data-slide-to="0"></li>
                <li data-target="#principal-carousel" data-slide-to="1"></li>
            </ol>
            <!-- Slides -->
            <div class="carousel-inner top">
        '.$autito.' 
        <!-- Controles -->
            <a href="#principal-carousel" class="carousel-control-prev" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a href="#principal-carousel" class="carousel-control-next" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
            </div>
        </div>
    </div>';

$txt_index = '<div class="container">
        <div class="row pt-3 pt-sm-3 pt-md-4 pt-lg-5">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <h1 class="sub-home">'.$arr_textoAbajo[0].'</h1>
                <h2 class="tit-home">'.$arr_textoAbajo[1].'</h2>
                <p class="col-12">
                    <span class="texto-home">'.$arr_textoAbajo[2].'</span>
                </p>
                <p class="col-12">
                    <span class="texto-home">'.$arr_textoAbajo[3].'</span>
                </p>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 text-center">
            <img src="'.$arr_imagenes[2].'" alt="cargador-auto" width="538" height="536" class="img-fluid img-home">
            </div>
        </div>
    </div>';
    echo $index_imagenes;
    echo $txt_index;
?>
</main>
<?php 
require_once "footer.php" 
?>
    <!-- JavaScript -->
    <script src="lib/jquery/jquery-3.3.1.min.js"></script>
    <script src="lib/popper/popper.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>