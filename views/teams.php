<?php
    $title = "Titre de la page";
    ob_start();
?>

blablabla

<?php 
    $content = ob_get_clean();
    require('public/index.php');
?>