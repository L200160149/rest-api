<?php

// $mahasiswa = [
//     [
//         "nama" => "Kucing 1",
//         "umur" => 1,
//         "makanan" => "Whiskas"
//     ],
//     [
//         "nama" => "Kucing 2",
//         "umur" => 1,
//         "makanan" => "Whiskas"
//     ],
//     [
//         "nama" => "Kucing 3",
//         "umur" => 1,
//         "makanan" => "Whiskas"
//     ]
//     ];

$dbh = new PDO('mysql:host=localhost;dbname=binamargajateng', 'root','');
$db = $dbh->prepare('SELECT * FROM pengguna');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;

?>