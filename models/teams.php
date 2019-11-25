<?php
    require_once('utils/db.php');

    function getTeams() {

        $db = dbConnect();
        
        $request = 'SELECT * FROM teams';
        $getTeams = $db->prepare($request);
        $getTeams->execute();

        return $getTeams->fetchAll(PDO::FETCH_ASSOC); 
    }