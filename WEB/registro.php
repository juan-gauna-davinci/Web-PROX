<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/style2.css">
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
    <div class="container">

    <?php

$nameErr= $lastnameErr = $emailErr = $confirmpasswordErr=  $passwordErr ="";
$name = $lastname = $email = $password = $confirmPassword =  "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (empty($_POST["first-name"])) {
    $nameErr = "Name is required";
} else {
    $name = test_input($_POST["first-name"]);
}

if (empty($_POST["last-name"])) {
    $lastnameErr = "last name is required";
} else {
    $lastname = test_input($_POST["last-name"]);
}

if (empty($_POST["email"])) {
    $emailErr = "Email is required";
} else {
    $email = test_input($_POST["email"]);
}


if(empty($_POST["password"])) {
    $passwordErr = "password is required";
}

if(strcmp($_POST["password"], $_POST["confirm-password"]) === 0) {
    $password= test_input($_POST["password"]);
    $confirmPassword= test_input($_POST["confirm-password"]);
    header("Location:login.php");
} else {
    $confirmpasswordErr = "rewrite the correct password";
}


}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-wrap">
            <h1 class="registro-tit">Registrese gratis</h1>
            <p class="telefono">Estas preparado para unirte a nosotros</p>
        <div class="form-group">
            <label for="first-name">Nombre</label>
            <input type="text" name="first-name" id="first-name" minlength="10" maxlength="20" required>
            <span class="error"><?php echo $nameErr;?></span>
        </div>
        <div class="form-group">
            <label for="last-name" class="telefono">Apellido</label>
            <input type="text" name="last-name" id="last-name" minlength="10" maxlength="20" required>
            <span class="error"><?php echo $lastnameErr;?></span>
        </div>
        <div class="form-group">
            <label for="email" >Email</label>
            <input type="email" name="email" id="email" minlength="20" maxlength="30" required>
            <span class="error"><?php echo $emailErr;?></span>
        </div>
        <div class="form-group">
            <label for="password" >Contraseña</label>
            <input type="password" name="password" id="password" minlength="8" maxlength="20" required>
            <span class="error"><?php echo $passwordErr;?></span>
        </div>
        <div class="form-group">
            <label for="confirm-password" >Confirme Contraseña</label>
            <input type="password" name="confirm-password" id="confirm-password" minlength="8" maxlength="20" required>
            <span class="error"><?php echo $confirmpasswordErr;?></span>
        </div>
        <div class="text-center">
            <input type="submit" name="submit" class="btn btn-primary">
        </div>
        </form>
        
        <?php

//abrir el archivo datos.json y subirlo a memoria
$archivo = file_get_contents("datos2.json");
$arreglodatos = json_decode($archivo,true);
//armo el arreglo con los datos del formulario

if(!empty($name) && !empty($lastname) && !empty($email) && !empty($password) && !empty($confirmPassword) && !in_array(array("name"=>$name ,"lastname"=>$lastname ,"email"=>$email ,"password" => $password ), $arreglodatos) && strcmp($password, $confirmPassword) === 0 ){
    $miarreglo = array("name"=>$name ,"lastname"=>$lastname ,"email"=>$email ,"password" => password_hash($password, PASSWORD_DEFAULT));
    //agregar este arreglo al arreglo en memoria
    array_push($arreglodatos,$miarreglo);
    //convierto el arreglo a formato JSON  y lo guardo
    $salidaJson = json_encode($arreglodatos) ;
    file_put_contents("datos2.json", $salidaJson );

}

?>
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