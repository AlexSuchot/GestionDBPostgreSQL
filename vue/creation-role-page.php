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
                <li><a href="select-page.php">Affichage des données</a></li>
                    <li><a href="creation-table-page.php">Creation de table</a></li>
                    <li><a href="creation-schema-page.php">Creation de schema</a></li>
                    <li><a href="grant-revoke-page.php">Attribution et révocation de droit</a></li>
                    <li><a class="active" href="creation-role-page.php">Création d'utilisateur</a></li>

                <li><a href="../api/logout.php">Deconnexion</a></li>
            </ul>
        </div>
        <?php

if (isset($_POST['submitRole'])) {
    $nameUser = $_POST['nameUser'];
    $userPassword = $_POST['userPassword'];

    $query =
        "CREATE USER $nameUser WITH PASSWORD '$userPassword' LOGIN SUPERUSER";
    $pdo_select = $conn->prepare($query);
    $pdo_select->execute();
}
?>

        
        <form method="POST" accept-charset="UTF-8">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" placeholder="User" name="nameUser" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" placeholder="Password" name="userPassword" required>
    </div>
    <button type="submit" name="submitRole" class="btn btn-primary">Submit</button>
    </form>
    </body>
</html>


