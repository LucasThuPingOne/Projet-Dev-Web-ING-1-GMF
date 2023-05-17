<?php 
session_start();
$cnx = mysqli_connect('localhost:3306', 'user', 'password1');
if (mysqli_connect_errno($cnx)) {
echo mysqli_connect_error();
};
$boolRes = mysqli_select_db($cnx, 'php');
$_SESSION['panier'] = 0;
$req = "DELETE FROM panier";
$resultat = mysqli_query($cnx, $req);

header('Location: accueil.php');
?>