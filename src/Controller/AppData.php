<?php
require_once ('../config/db_connection.php');
function getUsers()
{
    $mysqli = getDatabaseConnection();
    $result = $mysqli->query("SELECT id, CONCAT(name,lastname) as Name FROM user");
    return $result;
}