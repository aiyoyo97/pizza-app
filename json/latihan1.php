<?php 

// $mahasiswa =[

// 	[
// 		"nama" => "Beh",
// 		"nrp" => "193043302",
// 		"email" => "beh@gmail.com"
// 	],

// 	[
// 		"nama" => "So",
// 		"nrp" => "193043302",
// 		"email" => "beh@gmail.com"
// 	]

// ];

$dbh = new PDO('mysql:host=localhost;dbname=phpmvc', 'root', '');

$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;

?>