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
                <li><a class="active" href="select-page.php">Affichage des données</a></li>
                <?php if ($_SESSION['user'] === 'admin'): ?>
                    <li><a href="creation-table-page.php">Creation de table</a></li>
                    <li><a href="creation-schema-page.php">Creation de schema</a></li>
                    <li><a href="grant-revoke-page.php">Attribution et révocation de droit</a></li>
                    <li><a href="creation-role-page.php">Création d'utilisateur</a></li>
                <?php endif;?>

                <li><a href="../api/logout.php">Deconnexion</a></li>
            </ul>
        </div>

        <h2>Table PNL</h2>
        <?php
require '../musique/pnl.php';
if ($NbreData > 0) {
    ?>
	<table>
	<thead>
		<tr>
			<th>Album</th>
			<th>Année</th>
			<th>Nombre de musiques</th>
		</tr>
	</thead>
	<tbody>
<?php
// pour chaque ligne (chaque enregistrement)
    foreach ($rowAll as $row) {
        // DONNEES A AFFICHER dans chaque cellule de la ligne
        ?>
		<tr>
			<td><?php echo $row['album']; ?></td>
			<td><?php echo $row['annee']; ?></td>
			<td><?php echo $row['nombres_de_musique']; ?></td>
		</tr>
<?php
} // fin foreach
    ?>
	</tbody>
	</table>
<?php
} else {?>
	pas de données à afficher
<?php
}
?>

<h2>Table VALD</h2>
        <?php
require '../musique/vald.php';
if ($NbreData > 0) {
    ?>
	<table>
	<thead>
		<tr>
			<th>Album</th>
			<th>Année</th>
			<th>Nombre de musiques</th>
		</tr>
	</thead>
	<tbody>
<?php
// pour chaque ligne (chaque enregistrement)
    foreach ($rowAll as $row) {
        // DONNEES A AFFICHER dans chaque cellule de la ligne
        ?>
		<tr>
			<td><?php echo $row['album']; ?></td>
			<td><?php echo $row['annee']; ?></td>
			<td><?php echo $row['nombres_de_musique']; ?></td>
		</tr>
<?php
} // fin foreach
    ?>
	</tbody>
	</table>
<?php
} else {?>
	pas de données à afficher
<?php
}
?>

<h2>Table Lomepal</h2>
        <?php
require '../musique/lome.php';
if ($NbreData > 0) {
    ?>
	<table>
	<thead>
		<tr>
			<th>Album</th>
			<th>Année</th>
			<th>Nombre de musiques</th>
		</tr>
	</thead>
	<tbody>
<?php
// pour chaque ligne (chaque enregistrement)
    foreach ($rowAll as $row) {
        // DONNEES A AFFICHER dans chaque cellule de la ligne
        ?>
		<tr>
			<td><?php echo $row['album']; ?></td>
			<td><?php echo $row['annee']; ?></td>
			<td><?php echo $row['nombres_de_musique']; ?></td>
		</tr>
<?php
} // fin foreach
    ?>
	</tbody>
	</table>
<?php
} else {?>
	pas de données à afficher
<?php
}
?>
    </body>
</html>




<?php

if ($_SESSION['user'] === 'admin') {
    echo 'admin';
}
if ($_SESSION['user'] === 'postgres') {
    echo 'postgres';
}

?>