# TP1code

Code du TP1 de Dev Web
<br>Ecrit par Lucas Thu Ping One (thupingone@cy-tech.fr)

## Instruction d'utilisation
Pour accéder au site il faut:
- Vous placer dans le dossier ING1_GMF_thupingone
- Host le site web 
```
> php -S localhost:8080
```
- Ouvrir un navigateur et écrire dans la barre 
```
> http://localhost:8080/code/accueil.php
```
- Pour se connecter login: admin, password: admin
- Explorer le site!

## Remarques
- Au lieu d'utiliser un fichier "varSession.inc.php" pour stocker un tableau contenant les informations des différentes catégories, j'ai choisi de créer un fichier .json pour toutes les catégories et les lire pour récupérer les infos. Pour modifier le stock il suffit d'écrire dans le fichier en modifiant le stock.

- Il y a plein de fonctionnalité qui ne marche pas comme le panier et la vérification en php qui ne sont donc pas présentes.