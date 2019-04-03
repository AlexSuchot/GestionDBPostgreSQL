<?php
require_once '../api/connectiondb.php';

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" media="screen" href="../assets/style.css">
<link rel="stylesheet" type="text/css" href="../assets/succes-schema.css">


</head>
    <body>
        <div class="navbar">
            <ul>
                <li><a class="active" href="select-page.php">Affichage des données</a></li>

                <?php if($_SESSION['user'] === 'admin'): ?>
                    <li><a href="creation-table-page.php">Creation de table</a></li>
                    <li><a class="active" href="creation-schema-page.php">Creation de schema</a></li>
                    <li><a href="grant-revoke-page.php">Attribution et révocation de droit</a></li>
                    <li><a href="creation-role-page.php">Création d'utilisateur</a></li>
                <?php endif; ?>
                
                <li><a href="../api/logout.php">Deconnexion</a></li>
            </ul>
        </div>

        <div class="succes-div">
            <p class="">Félicitation, schéma créé avec succès !</p>
            <button class="btn"><a class="succes-button" href="creation-schema-page.php">
                Créer un autre schema ?

            </button>
        </div>
    </body>
</html>


