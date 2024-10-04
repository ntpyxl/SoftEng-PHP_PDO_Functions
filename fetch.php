<?php require_once 'dbConfig.php'; ?>

<?php 
$query = "SELECT * FROM games WHERE game_id = 1";

$statement = $pdo -> prepare($query);
if($statement -> execute()) {
    echo "<pre>";
    print_r($statement -> fetch());
    echo "<pre>";
}

?>