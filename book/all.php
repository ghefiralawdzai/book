<?php
include '../koneksi.php';
/**
 * @var $connection PDO
 */
$statement = $connection->query("select * from buku");

//Atur supaya hasil querynya berupa Array
$statement->setFetchMode(PDO::FETCH_ASSOC);

//jalankan JSON
$results = $statement->fetchAll();

//output JSON
header('Content-Type: application/json');
echo json_encode($results);