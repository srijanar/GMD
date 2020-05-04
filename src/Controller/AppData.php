<?php
require_once (ROOT_DIR.'/config/db_connection.php');
function getUsers()
{
    $mysqli = getDatabaseConnection();
    $result = $mysqli->query("SELECT id, CONCAT(firstname,lastname) as Name FROM user");
    return $result;
}

function getCameras(){
    $mysqli = getDatabaseConnection();
    $result = $mysqli->query("SELECT * FROM camera");
    return $result;
}