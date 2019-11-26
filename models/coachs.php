<?php require_once('utils/db.php');

function getCoachs()
{

    $db = dbConnect();

    $request = 'SELECT * FROM coachs';
    $getCoachs = $db->prepare($request);
    $getCoachs->execute();

    return $getCoachs->fetchAll(PDO::FETCH_ASSOC);
}

function showCoach($id)
{
    $db = dbConnect();

    $request = 'SELECT * FROM coachs WHERE id = :id';

    $showTeam = $db->prepare($request);
    $showTeam->bindValue(':id', $id, PDO::PARAM_INT);
    $showTeam->execute();

    return $showTeam->fetch(PDO::FETCH_ASSOC);
}
