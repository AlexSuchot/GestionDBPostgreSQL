<?php
session_start();
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
                <?php if($_SESSION['user'] === 'admin'): ?>
                    <li><a href="creation-table-page.php">Creation de table</a></li>
                    <li><a href="creation-schema-page.php">Creation de schema</a></li>
                    <li><a href="grant-revoke-page.php">Attribution et révocation de droit</a></li>
                    <li><a class="active" href="creation-role-page.php">Création d'utilisateur</a></li>
                <?php endif; ?>
                
                <li><a href="../api/logout.php">Deconnexion</a></li>
            </ul>
        </div>
    </body>
</html>


