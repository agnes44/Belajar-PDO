<?php
$dbname = "db_latihan";
$host = "localhost";
$user = "root";
$pass = "";

try
{
    $db=new PDO("mysql:host={$host};dbname={$dbname}",$user,$pass);

    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e)
{
    die("Connection Error : ".$e->getMessage());
}
