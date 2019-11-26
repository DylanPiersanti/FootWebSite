<?php
$title = "Titre de la page";
ob_start();

?>

<main class="teamList">
    <div class="container">
        <div class="row">

            <div class="col-12 mt-5 mb-4">
                <h1 class="text-white">
                    <?=
                        $currentTeam['name']
                            . " (" .
                            $currentTeam['short_name']
                            . ")"
                    ?>
                </h1>
                <div class="jumbotron currentTeam">

                    <div class="row">

                        <div class="col-4">

                            <div class="card currentLogoContainer" style="width: 18rem;">
                                <img src="<?= $currentTeam['logo'] ?>" class="card-img-top mt-2 mb-2" alt="...">
                            </div>
                        </div>

                        <div class="col-8">
                            <table class="table table-striped table-dark">
                                <tbody>
                                    <tr>
                                        <td>Nom de l'équipe :</td>
                                        <td><?=
                                                $currentTeam['name']
                                                    . " (" .
                                                    $currentTeam['short_name']
                                                    . ")"
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Date de fondation :</td>
                                        <td><?= $currentTeam['fundation_date'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Président : </td>
                                        <td><?= $currentTeam['president'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Adresse : </td>
                                        <td><?= $currentTeam['adress'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Site internet : </td>
                                        <td><a href="<?= $currentTeam['website'] ?>"><?= $currentTeam['website'] ?></a></td>
                                    </tr>
                                    <tr>
                                        <td>Lequipe.fr : </td>
                                        <td><a href="<?= $currentTeam['link'] ?>"><?= $currentTeam['link'] ?></a></td>
                                    </tr>
                                    <tr>
                                        <td>Stade : </td>
                                        <td>
                                            <?= 
                                            $currentTeam['stadeName'] .
                                            " | (" . $currentTeam['stadeAdress'] . ")";
                                             ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
$content = ob_get_clean();
require('public/index.php');
?>