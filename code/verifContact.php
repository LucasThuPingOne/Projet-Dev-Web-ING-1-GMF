<?php
session_start();
$dateN = $_POST['Date_Naissance'];
$nom = $_POST['Nom'];
$prenom = $_POST['Prenom'];
$tel = $_POST['Tel'];
$email = $_POST['Email'];
$genre = $_POST['Genre'];
$sujet = $_POST["Sujet"];
$message = $_POST['Message'];
$envoyer = $_POST['Envoyer'];

$erreur = false;

// format attendu : courriel
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = true;
    $emailexe = "⚠️ Veuillez entrer une adresse email valide (exemple@email.fr) ⚠️";
    $emailclass = "alert";
}

// format attendu : téléphone
if(!preg_match("/^[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}$/", $tel)) {
    $messageErreur .= 'Le téléphone n\'est pas valide. Il doit être au format 999 999-9999.<br />';
}

if (!preg_match("/^[a-zA-ZÀ-ÖØ-öø-ÿ-]+$/", $prenom)) {
    $error = true;
    $prenomverif = "⚠️ Veuillez entrer un prénom valide ⚠️";
    $prenomclass = "alert";
}

if (!preg_match("/^[a-zA-ZÀ-ÖØ-öø-ÿ-]+$/", $nom)) {
    $error = true;
    $nomverif = "⚠️ Veuillez entrer un nom valide ⚠️";
    $nomclass = "alert";
}

if (empty($message)) {
    $error = true;
    $messverif = "⚠️ Veuillez entrer la raison de votre contact ⚠️";
    $messageclass = "background-color: #ff6e6b;";
}

//Idem au js
$dateObj = DateTime::createFromFormat('Y-m-d', $dateN);
if (!($dateObj && $dateObj->format('Y-m-d') === $dateN && $dateObj < new DateTime())) {
    $error = true;
    $verifnaiss = "⚠️ Veuillez entrer une date de naissance valide ⚠️";
    $dateNclass = "alert";
}
    
if (!$error) {
    $envoi = "Le formulaire a été soumis avec succès.";
}
header('Location: contact.php');
?>