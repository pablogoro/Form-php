esto es la pantalla 2
<?php
session_start();
if ($_SESSION['pantalla2']!='check') {
    header('Location: ../index.php');
    
}
?>
<a href="../proc/replay.php">volver a jugar</a>
</form>