<!DOCTYPE html>
<html lang="es"> 
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="style/style.css" />
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
<H1 class="text-center" id="titulo"> Solar Panels </H1>
<?php
$arr_h1 = ["Powerwall","Ecológico" ];
$arr_h2 = ["Batería para el Hogar", "Electricidad por menos"];
$arr_p = ["El Powerwall es una batería doméstica compacta que reduce su dependencia de la red al almacenar su energía solar para usarla cuando el sol no brilla. Puede agregar unidades Powerwall adicionales a su pedido para reducir aún más su huella de carbono y preparar su hogar para cortes de energía.", "Utilice energía solar para alimentar su hogar y reducir su dependencia de la red. Estos paneles solares son de bajo perfil y duraderos, convirtiendo silenciosamente la luz solar en energía durante las próximas décadas.  El hardware integrado y el diseño simple logran esto al asegurar los paneles cerca de su techo y entre sí para una estética mínima. "];
$arr_img = ["panell.jpg","panel.jpg"];

for($i=0;$i<2;$i++){
    $producto = '
    <div class="container text-white">
            <div class="container pt-3">
                <div class="container seccion">
                    <div class="row">
                        <div class="col-lg-6 text-left ">
                            <img src="img/'. $arr_img[$i] . '" alt="Imagen-panel1" width="200" height="200" class=" img-fluid img-solar-arriba">
                        </div>
                        <div class="col-lg-6">
                            <h1 class="tit-solar">'. $arr_h1[$i] . '</h1>
                            <h2 class="sub-solar">'. $arr_h2[$i] . '</h2>
                            <p class="texto-solar">  '. $arr_p[$i] . '
                            </p>
                        </div>
                    </div>
                </div> ';  
    echo $producto;
}
for($i=0; $i<0;$i++){
    $producto2 = '
    <div class="container seccion">
                    <div class="row">
                        <div class=" col-lg-6">
                            <h1 class="tit-solar">'. $arr_h1[$i] . '</h1>
                            <h2 class="sub-solar">'. $arr_h2[$i] . '</h2>
                            <p class="texto-solar">'. $arr_p[$i] . '
                            </p>
                        </div> 
                        <div class="col-lg-6">
                            <img src="img/' . $arr_img[$i] . '" alt="Imagen-panel2" width="200" height="200" class="img-fluid img-solar-abajo">
                        </div>
                    </div>
                </div>
            </div>
    </div> ';
    echo $producto;
        }    
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