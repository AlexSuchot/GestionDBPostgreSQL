<?php
$query = "SELECT * FROM schema.pnl order by annee desc;";
try {
    $pdo_select = $conn->prepare($query);
    $pdo_select->execute();
    $NbreData = $pdo_select->rowCount();
    $rowAll = $pdo_select->fetchAll();
} catch (PDOException $e) {
}