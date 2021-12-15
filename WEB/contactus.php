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
        <div class="container">
            <div class="row">
                <div class="col-12">                
                    <h1 id="titulo" >Contact Us</h1>
                    <p class="sub-contact">
                        Envia una pregunta o comentario,la responderemos lo antes posible.
                    </p>
                </div>
                
            <?php

$nameErr= $messageErr = $emailErr =  $numberErr ="";
$name = $email = $message = $number =  "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["number"])) {
    $numberErr = "Number is required";
  } else {
    $number = test_input($_POST["number"]);
  }

  if(empty($_POST["message"])) {
    $messageErr = "mesagge is required";
  } else {
    $message = test_input($_POST["message"]);
  }

}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>
            <div class="col-12">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                
                <input type ="text" name="name" minlength="8" maxlength="20" class= "contact-form-text" placeholder="Nombre" required>
                <span class="error"><?php echo $nameErr;?></span>
                <input type="email" name="email" minlength="20" maxlength="30"  class= "contact-form-text" placeholder="Email" required> 
                <span class="error"><?php echo $emailErr;?></span>
                <input type="number" name="number" minlength="8" maxlength="20"  class= "contact-form-text" placeholder="Telefono" required>
                <span class="error"><?php echo $numberErr;?></span>
                <textarea name="message"id="message" cols="30" rows="10" maxlength="200" class="contact-form-text" placeholder="Mensaje" required ></textarea>
                <span class="error"><?php echo $messageErr;?></span>
                <div class="text-center"><input type="submit" name="submit" class="btn btn-primary"></div>
            </div>
                    </form>
                    <?php

//abrir el archivo datos.json y subirlo a memoria

$archivo = file_get_contents("datos.json");
$arreglodatos = json_decode($archivo,true);

//armo el arreglo con los datos del formulario

if(!empty($name) && !empty($email) && !empty($number) && !empty($message) && !in_array(array("name"=>$name ,"email"=>$email ,"number"=>$number ,"message" => $message), $arreglodatos)){
  
  $miarreglo = array("name"=> $name ,"email"=> $email ,"number"=> $number ,"message" => $message);
  
  //agregar este arreglo al arreglo en memoria
  array_push($arreglodatos,$miarreglo);
  
  //convierto el arreglo a formato JSON  y lo guardo
  $salidaJson = json_encode($arreglodatos) ;
  file_put_contents("datos.json", $salidaJson );

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