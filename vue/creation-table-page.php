<?php
require '../api/connectiondb.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" media="screen" href="../assets/style.css">
</head>
    <body>
        <div class="navbar">
            <ul>
                <li><a href="select-page.php">Affichage des données</a></li>
                    <li><a class="active" href="creation-table-page.php">Creation de table</a></li>
                    <li><a href="creation-schema-page.php">Creation de schema</a></li>
                    <li><a href="grant-revoke-page.php">Attribution et révocation de droit</a></li>
                    <li><a href="creation-role-page.php">Création d'utilisateur</a></li>
                
                <li><a href="../api/logout.php">Deconnexion</a></li>
            </ul>
        </div>
        <?php

if (isset($_POST['submitTable'])) {
    $tableName = $_POST['table'];

    $query =
        "$tableName";
    $pdo_select = $conn->prepare($query);
    $pdo_select->execute();
}
?>

        <form method="post" accept-charset="UTF-8">

            <h3>Saisissez la requête que vous souhaitez pour créer une table:</h3>
            <h4><label for="table">Requête exemple: "CREATE TABLE (nom_du_schema_existant).(nom_de_la_table) {(les champs que vous voulez)};"</label></h4>
            <textarea id="table" type="text" name="table"></textarea>

            <input type="submit" name="submitTable" value="submit">

        </form>
    </body>
</html>


