<?php
    $cnx = mysqli_connect('localhost:3306', 'user', 'password1');
    if (mysqli_connect_errno($cnx)) {
        echo mysqli_connect_error();
    };
    $boolRes = mysqli_select_db($cnx, 'php');
    if (!$boolRes) throw new Exception($base.' introuvable');
    $req = "SELECT * FROM user";
    $resultat = mysqli_query($cnx, $req);
    $tab = mysqli_fetch_all($resultat, MYSQLI_ASSOC);
    foreach ($tab as $element) {
        if ($element['login']==$_POST['login']) {
            header('Location: creeCompte.html');
            exit();
        }
    }
    $req = "INSERT INTO `user` (`nom`, `prenom`, `login`, `password`) VALUES ('".$_POST['nom']."', '".$_POST['prenom']."', '".$_POST['login']."', '".$_POST['password']."');";
    $resultat = mysqli_query($cnx, $req);
    header('Location: connexion.html');

?>