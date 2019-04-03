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
                    <li><a href="creation-schema-page.php">Creation de schema</a></li>
                    <li><a class="active" href="grant-revoke-page.php">Attribution et révocation de droit</a></li>
                    <li><a href="creation-role-page.php">Création d'utilisateur</a></li>
                
                <li><a href="../api/logout.php">Deconnexion</a></li>
            </ul>
        </div>
    </body>
</html>


