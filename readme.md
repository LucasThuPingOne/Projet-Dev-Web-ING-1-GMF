# TP1code

Code du TP1 de Dev Web
<br>Ecrit par Lucas Thu Ping One (thupingone@cy-tech.fr)

## Instruction d'utilisation du site web
Pour accéder au site il faut:
- Se placer dans le dossier ING1_GMF_thupingone
- Host le site web: 
```
> php -S localhost:8080
```
- Ouvrir un navigateur et écrire dans la barre :
```
> http://localhost:8080/code/accueil.php
```
- Pour se connecter login: <b>admin</b>, password: <b>admin</b> ou créer un compte
- Pour naviguer entre les différentes pages
```
> Utiliser le menu horizontale
```
- Cliquer sur "Panier" permet de consulter son panier.

## Instruction BDD
- Ouvrir un terminal et taper la commande:
```
> mysql -u user -p
```
```
> Mot de passe = "password1"
```
- Pour détruire la base de données et la recréer:
```
> source code/createBDD.sql
```
- Pour remplir la BDD depuis les fichier json:
```
> source code/vachetteData.sql
```
## Remarques

- Lorsque l'on vide le panier, le stock ne reprend pas ses anciennes valeurs.
- Je n'ai pas fini la vérification en php du formulaire de contact il ne manque plus qu'à afficher les messages d'erreurs.
- Vous pouvez visualiser la base de donnée avec <a>http://localhost/phpmyadmin/index.php</a> en vous connectant avec login:<b> user</b> et password: <b>password</b>, la base de donnée se nomme <b>php</b>.
- Pour des raisons que je ne comprends pas le bouton de connexion ne s'affiche pas lorsque l'on est dans la page de contact.

