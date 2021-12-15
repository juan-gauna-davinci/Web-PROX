<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="style/style.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="lib/Bootstrap/css/bootstrap.min.css"/>
    <title>Tesla</title>
</head>
<body>
    <!-- HTML -->
    <?php 
        require_once "header.php" ;
    ?>
    <main>
        <?php 
            $img = ["img/models.jpg","img/modelx.png","img/modely.png"] ;
            $modelos = ["Model S","Model X","Model Y"];
            $text = ["Este modelo está construido para velocidad y alcance por su aerodinámica","El Modelo que viaja más lejos con una sola carga que cualquier otro SUV eléctrico","El Modelo completamente eléctrico, nunca más tendrá que visitar una gasolinera."] ;
            
        ?>
        <!--Arriba-->
        <div class="container">
            <h1 class="text-center pt-3" id="titulo">Models</h1>
                <!--Modelos-->
                <div class="row">
                <?php 
                for($i = 0 ; $i <3 ; $i ++){
                    $model = '<div class="col-lg-4 mb-4">
                            <div class="card text-center bg-dark">
                                <img src='.$img[$i].' alt="imagen-modelos" width="400" height="500" class="card-img-top img-fluid">
                                <div class="card-body text-white">
                                    <h3 class="card-title">'.$modelos[$i].'</h3>
                                    <p class="card-text">'.$text[$i].'</p>
                                </div>
                            </div>
                        </div>';
                    echo $model; 
                }
                ?>
                </div>
        </div>
        <!--Abajo-->
        <div class="container pb-3">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 ">
                    <h1 class="sub-mod">Seguridad</h1>
                    <h2 class="tit-mod">Construido para la seguridad</h2>
                    <?php 
                    $txt_mod = ["Todos los modelos se construyen desde cero como un vehículo eléctrico, con una arquitectura de alta resistencia y un paquete de baterías montado en el piso para una increíble protección de los ocupantes y un bajo riesgo de volcadura.","Cada modelo incluye las últimas características de seguridad activa de Tesla, como el frenado automático de emergencia, en sin costo extra."];
                    
                    for ($i = 0 ; $i < 2 ; $i++ ){
                        $abelardo = '<p class="col-sm-12">
                        <span class="texto-mod">'.$txt_mod[$i].'</span>
                        </p>' ;
                        echo $abelardo;
                    }
                    ?>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 text-center">
                <img src="img/carroceria.png" alt="Imagen-carroceria" width="1085" height="841" class="img-fluid img-model">
                </div>
            </div>
        </div>
    </main>
    <!--Footer-->
    <?php 
        require_once "footer.php" ;
    ?>
    <!-- JavaScript -->
    <script src="lib/jquery/jquery-3.3.1.min.js"></script>
    <script src="lib/popper/popper.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>