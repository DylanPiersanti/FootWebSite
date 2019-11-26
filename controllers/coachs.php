<?php
    require('models/coachs.php');

    function coachsList()
    {
        $selectCoachs = getCoachs();
        require('views/coachs.php');
    }

    function myCoach($id) {
        $currentCoach = showCoach($id);
        require('views/currentCoach.php');
    }