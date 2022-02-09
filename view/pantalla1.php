<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recogida de datos</title>
</head>
<body>
<?php 
   session_start();
   if ($_SESSION["pantalla1"]!="check") {
     header("Location: ../index.php");
   } 
?>
<h1>Mostar datos del formulario</h1>
    <p>esto es la pantalla 1</p>
    <form action="../proc/res.proc.php" method="post">
        <input type="text" name="pokemon">
        <input type="submit" name="pantalla1" value="enviar">
    </form>
    <?php
    //echo '<p>'.'nombre: '.$_POST['nombre'].'</p>';
    //echo '<p>'.'contraseña: '.$_POST['password'].'</p>';

    ?>
    
</body>
</html>