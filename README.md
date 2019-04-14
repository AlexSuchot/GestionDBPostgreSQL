# GestionDBPostgreSQL
# Voici les informations technique du tp postgreSQL

Nous avons réalisé cette interface avec Elouan Lafréchoux, Alexandre Suchot et Johan Teillais.


## Choix technique

Après avoir hésité entre l'utilisation de nodeJS et de PHP, nous avons préféré utiliser php car nos compétences pour réaliser le projet était mieux adapter avec l'utilisation du php. Puis toutes les requêtes à utiliser sont en POSTGRESQL.

## IHM (Interface Homme Machine)

Notre interface web se présente sous la forme d'un site web, la première page à apparaitre est la page de connexion, si on essaie d'aller sur une autre page sans se connecter ce n'est pas possible. 

Pour la connexion il faut rentrer un nom d'utilisateur valide avec ce qu'il y a sur pgAdmin par exemple (et un mot de passe).

La Navbar affiche des liens différents en fonction de l'utilisateur, si on est super utilisateur on peut gérer entièrement la base. Avec par exemple en utilisateur "admin" et en mot de passe "admin".

Une fois connecté l'utilisateur se retrouve sur la page qui affiche les tableaux de la base de données (select). Nous avons mis une bar de navigation en haut afin que l'utilisateur puisse se diriger facilement sur toute l'interface web. 


## Détail des pages :

Sur la page de création de table : (s'affiche uniquement en super utilisateur)

``` "CREATE TABLE (nom_du_schema_existant).(nom_de_la_table);" ```
 {(les champs que vous voulez)}
 
 
Sur la page création de schéma suivre le formulaire. (s'affiche uniquement en super utilisateur)


Pour la page gestion des privilèges, liberté d'utilisations en fonction des besoins : (s'affiche uniquement en super utilisateur)

``` GRANT PRIVILEGES ```
``` REVOKE PRIVILEGES ``` 

Pour la page de création d'utilisateur : (s'affiche uniquement en super utilisateur)

``` "CREATE USER userName WITH PASSWORD userPassword" ``` 

Enfin à droite de la navbar il est possible de se déconnecter et de retourner à la page de connexion. 
