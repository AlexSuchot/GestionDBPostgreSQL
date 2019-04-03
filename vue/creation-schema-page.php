<?php
require_once '../api/connectiondb.php';

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" media="screen" href="../assets/style.css">
</head>
    <body>
        <div class="navbar">
            <ul>
                <li><a class="active" href="select-page.php">Affichage des données</a></li>
                    <li><a href="creation-table-page.php">Creation de table</a></li>
                    <li><a class="active" href="creation-schema-page.php">Creation de schema</a></li>
                    <li><a href="grant-revoke-page.php">Attribution et révocation de droit</a></li>
                    <li><a href="creation-role-page.php">Création d'utilisateur</a></li>

                <li><a href="../api/logout.php">Deconnexion</a></li>
            </ul>
        </div>

        <?php

if (isset($_POST['submitSchema'])) {
    $schemaName = $_POST['schema'];

    $query =
        "$schemaName";
    $pdo_select = $conn->prepare($query);
    $pdo_select->execute();
}
?>

        <form method="post" accept-charset="UTF-8">

            <h3>Saisissez la requête que vous souhaitez pour créer un schéma:</h3>
            <h4><label for="schema">Requête exemple: "CREATE SCHEMA (nom_du_schema) AUTHORIZATION admin;"</label></h4>
            <textarea id="schema" type="text" name="schema"></textarea>

            <input type="submit" name="submitSchema" value="submit">

        </form>
    </body>
</html>