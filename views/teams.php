<?php
    $title = "Titre de la page";
    ob_start();
?>

<!-- 
<?php foreach($selectTeams as $teams) {
    echo $teams['name'];
}
?>
-->

<?php 
    $content = ob_get_clean();
    require('public/index.php');
?>