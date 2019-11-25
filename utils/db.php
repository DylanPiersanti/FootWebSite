<?php

function dbConnect() {
    $db = new PDO('mysql:host=localhost; dbname=football_ligue', 'root', '');
    return $db;
}