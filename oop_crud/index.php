<?php

require_once "db/koneksi.php";
require_once "db/QueryBuilder.php";
require_once "config/db.php";

$con = Koneksi::make($config);
var_dump($con);
$query = new QueryBuilder($con);

$statusInsert = $query->insert('user',
    ['nama' => 'Natalia Elvira', 'alamat' => 'Palu', 'telepon' => '089688543777', 'tmpt_lahir' => 'Ambon', 'tgl_lahir' => '1999 - 06 - 03'
    ]);

var_dump($statusInsert);