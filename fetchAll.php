<?php require_once 'dbConfig.php'; ?>

<?php 
$query = "SELECT * FROM games";

$statement = $pdo -> prepare($query);
if($statement -> execute()) {
    echo "<pre>";
    print_r($statement -> fetchAll());
    echo "<pre>";
}

?>