<?php require_once 'dbConfig.php'; ?>

<?php 
$query = "SELECT * FROM consoles";

$statement = $pdo -> prepare($query);
$statement -> execute();
$consoleTableData = $statement -> fetchAll();

?>
<HTML>
    <head>
        <style>
            table {border: 2px solid;}
            th, td {border: 1px solid; padding: 6px 4px;}
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Console ID</th>
                <th>Console Name</th>
                <th>Rental Price Per Day</th>
                <th>Available Units</th>
            </tr>
            <?php foreach($consoleTableData as $row) {?>
            <tr>
                <td><?php echo $row['console_id']; ?></td>
                <td><?php echo $row['console_name']; ?></td>
                <td><?php echo $row['rental_price_per_day']; ?></td>
                <td><?php echo $row['available_units']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</HTML>