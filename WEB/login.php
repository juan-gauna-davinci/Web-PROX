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
        <div class="container pb-4 text-center">
            <div class="row">
                <div class="col-12">                
                    <h1 id="titulo" class="pt-5" >Inicie Sesion</h1>
                    <p class="telefono">
                        Para recuperar la contraseña o el usuario comunicarse con soporte
                    </p>
                </div>
                <div class="col-12 pb-5">
                    <?php

$usernameErr= $passwordErr = "";
$username = $password = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["username"])) {
    $usernameErr = "username is required";
} else {
    $username = test_input($_POST["username"]);
}

if (empty($_POST["password"])) {
    $passwordErr = "password is required";
} else {
    $password = test_input($_POST["password"]);
}
    header("Location:index.php");

}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>                      
                        <div class="col-12 pt-5">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="was-validated pl-5 pr-5">
                            <div class="form-group">
                                <label for="username" class="telefono">Usuario:</label>
                                <input type="text" class="form-control" id="username" placeholder="Ingrese Usuario" name="username" minlength="6" maxlength="15" required>
                                <span class="error"><?php echo $usernameErr;?></span>
                                <div class="valid-feedback">Valido</div>
                                <div class="invalid-feedback">complete este espacio</div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="telefono">Contraseña:</label>
                                <input type="password" class="form-control" id="password" placeholder="Ingrese Contraseña" name="password" minlength="8" maxlength="20" required>
                                <span class="error"><?php echo $passwordErr;?></span>
                                <div class="valid-feedback">Valido</div>
                                <div class="invalid-feedback">complete este espacio</div>
                            </div>
                            <div class="form-group form-check">
                            <a href="registro.php">Registrese Aqui</a>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                        </div>
                        <?php

//abrir el archivo datos.json y subirlo a memoria
$archivo = file_get_contents("datos3.json");
$arreglodatos = json_decode($archivo,true);
//armo el arreglo con los datos del formulario

if(!empty($username) && !empty($password) && !in_array(array("username"=>$username ,"password"=>$password), $arreglodatos)  ){
    $miarreglo = array("username"=>$username ,"password"=> password_hash($password, PASSWORD_DEFAULT));
    //agregar este arreglo al arreglo en memoria
    array_push($arreglodatos,$miarreglo);

    //convierto el arreglo a formato JSON  y lo guardo
    $salidaJson = json_encode($arreglodatos) ;
    file_put_contents("datos3.json", $salidaJson );

}

?>

                    </div>
            </div>
        </div>
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