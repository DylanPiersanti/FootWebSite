<?php
    require_once('utils/db.php');

    function getTeams() {

        $db = dbConnect();
        
        $request = 'SELECT * FROM teams';
        $getTeams = $db->prepare($request);
        $getTeams->execute();

        return $getTeams->fetchAll(PDO::FETCH_ASSOC); 
    }

    function showTeam($id) {
        $db = dbConnect();

        $request = 'SELECT *, 
        stadiums.name 
        AS stadeName,
        stadiums.adress
        AS stadeAdress
        FROM teams 
        INNER JOIN stadiums 
        ON teams.id_stadium = stadiums.id 
        WHERE teams.id = :id';

        $showTeam = $db->prepare($request);
        $showTeam->bindValue(':id', $id, PDO::PARAM_INT);
        $showTeam->execute();

        return $showTeam->fetch(PDO::FETCH_ASSOC);
    }