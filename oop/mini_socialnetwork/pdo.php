<?php
$db_name = 'demo';
$db_user = 'root';
$db_password = 'root';
try
{
    $pdo = new PDO('mysql:dbname='.$db_name.';host=localhost;charset=utf8mb4', $db_user, $db_password);
}
catch (Exception $e)
{
        die('Database error : ' . $e->getMessage());
}