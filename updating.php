<?php require_once 'dbConfig.php'; ?>

<?php 
$query = "UPDATE games SET available_units = 12 WHERE game_id = 20";

$statement = $pdo -> prepare($query);
$statement -> execute()

?>