<?php
require_once '../api/connectiondb.php';

function createSchema($schemaName, $authorization, $user){
    $query = "CREATE SCHEMA IF NOT EXISTS .'$schemaName'. 
              AUTHORIZATION .'$authorization'.
              GRANT ALL ON SCHEMA .'$schemaName'. TO $user";
    $pdo_select = $conn->prepare($query);
    $pdo_select->execute();
}
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

                <?php if($_SESSION['user'] === 'admin'): ?>
                    <li><a href="creation-table-page.php">Creation de table</a></li>
                    <li><a class="active" href="creation-schema-page.php">Creation de schema</a></li>
                    <li><a href="grant-revoke-page.php">Attribution et révocation de droit</a></li>
                    <li><a href="creation-role-page.php">Création d'utilisateur</a></li>
                <?php endif; ?>
                
                <li><a href="../api/logout.php">Deconnexion</a></li>
            </ul>
        </div>

        <form method="post" accept-charset="UTF-8">
        
            <h3><label for="name">Schema Name</label></h3>
            <input id="name" type="text" name="name">
            <input id="authorization" type="text" name="authorization">
            <input id="user" type="text" name="user">
            <input type="submit" onclick="createSchema($_POST['name'], $_POST['authorization'], $_POST['user'])" value="Submit">
            
        </form>
    </body>
</html>


