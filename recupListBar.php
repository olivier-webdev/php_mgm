<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");

$data = json_decode(file_get_contents('php://input'), true);
require 'pdo.php';

$stateRead = $pdo->prepare('SELECT idDinbar, name, cp, ville, date FROM dinerBar WHERE type = "BAR"');
$stateRead->execute();
$result = $stateRead-> fetchAll();

exit(json_encode($result));