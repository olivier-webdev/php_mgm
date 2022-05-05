<?php
try{
    $pdo = new PDO('mysql:host=db5007448092.hosting-data.io;dbname=dbs6137537', 'dbu2475970', 'Team_Fuck_Zuckerberg', [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch(PDOException $e) {
    echo $e->getMessage();
}
?>