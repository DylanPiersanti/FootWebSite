<?php
    require('models/teams.php');
    

    function teamsList() {
        $selectTeams = getTeams();
        require('views/teams.php');
    }

    function myTeam($id) {
        $currentTeam = showTeam($id);
        require('views/currentTeam.php');
    }