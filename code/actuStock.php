<?php
    session_start();
    $Qte_Commande = $_POST["Qte_Commande"];
    $Stock = $_POST["stock"];
    $id = $_POST['id_img'];
    $cat = $_POST['cat'];
    $prix = $_POST['prix'];
    $type = $_POST['type'];
    $res = $Stock - $Qte_Commande;

    $cnx = mysqli_connect('localhost:3306', 'user', 'password1');
    if (mysqli_connect_errno($cnx)) {
        echo mysqli_connect_error();
    };
    $boolRes = mysqli_select_db($cnx, 'php');
    if (!$boolRes) throw new Exception($base.' introuvable');
    $req = "UPDATE ".$cat." SET stock = ".$res." WHERE id_img = '".$id."' ;";
    $resultat = mysqli_query($cnx, $req);
    $req = "INSERT INTO panier (`type`, `qte`, `prix`, `total`) VALUES ('".$type."', ".$Qte_Commande.", ".$prix.", ".$Qte_Commande*$prix.");";
    $resultat = mysqli_query($cnx, $req);

    $_SESSION['panier'] = $_SESSION['panier']+$Qte_Commande*$prix;   
    echo $res; 
    
    


?>