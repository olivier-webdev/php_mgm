<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");

$data = json_decode(file_get_contents('php://input'), true);
require 'pdo.php';

$stateRead = $pdo->prepare('SELECT name, cp, ville, date FROM dinerBar');
$stateRead->execute();
$result = $stateRead-> fetchAll();

exit(json_encode($result));
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recup</title>
</head>
<body>
    <h1>Recup</h1>

</body>
</html>