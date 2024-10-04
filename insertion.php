<?php require_once 'dbConfig.php'; ?>

<?php 
$query = "INSERT INTO games (game_id, game_title, genre_id, platform_id, release_year, rental_price, available_units) VALUES (21, 'NEW GAME', 1, 2, 2024, 7.99, 20)";

$statement = $pdo -> prepare($query);
$statement -> execute()

?>