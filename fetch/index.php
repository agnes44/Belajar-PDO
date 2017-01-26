<?php

require_once "koneksi.php";
require_once "User.php";

$stmt = $db->prepare("select * from user");
$stmt->setFetchMode(PDO::FETCH_CLASS, 'user');
$stmt->execute();
$data = $stmt->fetchAll();
foreach ($data as $user) 
{
    echo $user->info() .'<br>';
}