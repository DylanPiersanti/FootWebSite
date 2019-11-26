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

    $request = 'SELECT *, 
	cht.id_team,
    cht.id_coach,
    coachs.name
    AS coachName,
    teams.name
    AS teamName,
    teams.id
    AS teamId
    FROM coachs 
    INNER JOIN coachs_has_teams AS cht
    ON cht.id_coach = coachs.id
    INNER JOIN teams
    ON teams.id = cht.id_team
    WHERE coachs.id = :id';

    $showTeam = $db->prepare($request);
    $showTeam->bindValue(':id', $id, PDO::PARAM_INT);
    $showTeam->execute();

    return $showTeam->fetch(PDO::FETCH_ASSOC);
}
