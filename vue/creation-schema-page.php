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

                <?php if($_SESSION['user'] === 'admin'): ?>
                    <li><a href="creation-table-page.php">Creation de table</a></li>
                    <li><a class="active" href="creation-schema-page.php">Creation de schema</a></li>
                    <li><a href="grant-revoke-page.php">Attribution et révocation de droit</a></li>
                    <li><a href="creation-role-page.php">Création d'utilisateur</a></li>
                <?php endif; ?>
                
                <li><a href="../api/logout.php">Deconnexion</a></li>
            </ul>
        </div>

        <?php

if (isset($_POST['submitSchema'])) {
    $schemaName = $_POST['name'];
    $userAdmin ="";
    
    
    if($userAdmin != ""){
        $userAdmin = $_POST['useradmin'];
    }
    else{
        $userAdmin == "";
    }
    $query =
        "CREATE SCHEMA IF NOT EXISTS $schemaName
         AUTHORIZATION $userAdmin;";
    $pdo_select = $conn->prepare($query);
    $pdo_select->execute();
    Header('Location: succes-schema.php');
    
}
?>
        <div class="form-schema">
            <form class="form" method="post" accept-charset="UTF-8">
                <h4>Nom du schéma</h4>
                <input class="input-form" id="name" type="text" name="name" placeholder="Nom" required>
            
                <h4>Nom de l'utilisateur</h4>
                <input class="input-form" id="useradmin" type="text" name="useradmin" placeholder="Utilisateur">
               
                <input class="submit-btn" type="submit" name="submitSchema" value="submit">
                
            </form>
        </div>
    </body>
</html>


