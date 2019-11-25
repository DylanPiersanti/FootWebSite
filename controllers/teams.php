<?php
    require('models/teams.php');
    

    function teamsList() {
        $selectTeams = getTeams();
        require('views/teams.php');
    }