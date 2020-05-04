<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/gmd/config/db_connection.php');
function getUsers()
{
    $mysqli = getDatabaseConnection();
    $result = $mysqli->query("SELECT id, CONCAT(name,lastname) as Name FROM user");
    return $result;
}

function getCameras(){
    $mysqli = getDatabaseConnection();
    $result = $mysqli->query("SELECT * FROM camera");
    return $result;
}