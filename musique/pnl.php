<?php
$query = "SELECT * FROM schema.pnl ORDER BY annee DESC;";
try {
    $pdo_select = $conn->prepare($query);
    $pdo_select->execute();
    $NbreData = $pdo_select->rowCount();
    $rowAll = $pdo_select->fetchAll();
    } catch (PDOException $e) {
}