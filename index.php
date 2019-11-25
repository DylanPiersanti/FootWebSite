<?php
if (!isset($_GET['path']) || !$_GET['path']) {
    require('views/home.php');
} else {
    switch ((string) $_GET['path']) {
        case 'teams':
            require('controllers/teams.php');
            test();
            break;
        default:
            require('views/404.php');
    }
}
