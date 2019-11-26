<?php
$title = "Titre de la page";
ob_start();
?>

<main class="teamList">
    <div class="container">
        <div class="py-5">
            <div class="container">
                <div class="row hidden-md-up">
                    <?php foreach($selectCoachs as $listCoachs) { 
                    ?>
                    <div class="card col-lg-3 coachList" style="width: 18rem;">
                        <img src="<?= $listCoachs['photo'] ?>" class="card-img-top mt-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?= $listCoachs['name'] ?></h5>
                            <a href="?path=coachs&id=<?= $listCoachs['id'] ?>" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <?php } 
                    ?>
                </div>

            </div>
        </div>
    </div>
</main>

<?php
$content = ob_get_clean();
require('public/index.php');
?>