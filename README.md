# GestionDBPostgreSQL
# Voici les informations technique du tp postgreSQL

Nous avons réalisé cette interface avec Elouan Lafréchoux, Alexandre Suchot et Johan Teillais.


## Choix technique

Après avoir hésité entre l'utilisation de nodeJS et de PHP, nous avons préféré utiliser php car nos compétences pour réaliser le projet était mieux adapter avec l'utilisation du php. Puis toutes les requêtes à utiliser sont en POSTGRESQL.

## IHM (Interface Homme Machine)

Notre interface web se présente sous la forme d'un site web, la première page à apparaitre est la page de connexion, si on essaie d'aller sur une autre page sans se connecter ce n'est pas possible. Pour la connexion il faut rentrer un nom d'utilisateur valide avec ce qu'il y a sur pgAdmin par exemple (et un mot de passe).
Une fois connecter l'utilisateur se retrouve sur la page qui affiche les tableaux de la base de données. Nous avons mis une bar de navigation en haut afin que l'utilisateur puisse se diriger facilement sur toute l'interface web. 
Alors de gauche à droite sur la bar de navigation il y a tout d'abord la page de création de table, alors il faut rentrer "CREATE TABLE (nom_du_schema_existant).(nom_de_la_table) {(les champs que vous voulez)};" afin de pouvoir créer la table que vous voulez. Ensuite il y a la création de schéma, vous avez juste à renseigner le nom de schéma que vous voulez sur la page. Après il y a la page d'attribution et de révocation de droits. Puis la dernière page est celle de la création d'un nouvel utilisateur en lui donnant un mot de passe et un nom d'utilisateur.
Enfin à droite de la navbar il est possible de se déconnecter et de retourner à la page de connexion. 
