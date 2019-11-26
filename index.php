<?php
if (!isset($_GET['path']) || !$_GET['path']) {
    require('views/home.php');
} else {
    switch ((string) $_GET['path']) {
        case 'teams':
            require('controllers/teams.php');

            if (isset($_GET['id'])) {
                myTeam($_GET['id']);
            } else {
                teamsList();
            }
            break;
        case 'coachs':
            require('controllers/coachs.php');
            if (isset($_GET['id'])) {
                myCoach($_GET['id']);
            } else {
                coachsList();
            }
            break;
        default:
            require('views/404.php');
    }
}
