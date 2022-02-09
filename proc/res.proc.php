<?php
//logica para ir a la primera pantalla

// index --> Pantalla 1
if(isset($_POST['index']) && strtolower($_POST['pokemon'])=='pikachu'){ 
  session_start(); 
  $_SESSION['pantalla1']='check'; 
  header('location: ../view/pantalla1.php');
}elseif(isset($_POST['index'])){
  header('location: ../index.php?msg=25');
}
  // Pantalla1 --> Pantalla 2
elseif(isset($_POST['pantalla1']) && strtolower($_POST['pokemon'])=='charmander'){
  session_start();
  $_SESSION['pantalla2']='check';
  header('location: ../view/pantalla2.php');
}elseif(isset($_POST['pantalla1'])){
  header('location: ../view/pantalla1.php?msg=4');
}

if (isset($_POST["reset"])) {
  session_destroy();
  header("Location: ../index.php");
}



// logica para ir a la segunda pantalla
