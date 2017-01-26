<?php

require_once "koneksi.php";

$email =isset($_POST['email'])?$_POST['email']:"";
$password =isset($_POST['password'])?$_POST['password']:"";
$query = "select * from admin where email = '".$email."' and password='".$password."';";
$stmt = $db->prepare($query);
$stmt->execute();

if($stmt->rowCount())
{
    echo 'berhasil';
}
else
{
    echo 'gagal masuk';
}