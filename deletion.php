<?php require_once 'dbConfig.php'; ?>

<?php 
$query = "DELETE FROM games WHERE game_id = 21";

$statement = $pdo -> prepare($query);
$statement -> execute()

?>