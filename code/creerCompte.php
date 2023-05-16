<?php
    $file = "../data/User.json";
    $data = file_get_contents($file);
    $data_cat = json_decode($data);
    $len = sizeof($data_cat);
    foreach ($data_cat as $key => $value) {
        if ($key == "login" && $value==$_POST['login']) {
            header('Location: creeCompte.html');
            exit();
        }
        else {
            $array = array(1 => array('nom' => $_POST['nom'], 'prenom' => $_POST['prenom'], 'login' => $_POST['login'], 'password' => $_POST['password'])); 
            file_put_contents($file, json_encode(array_merge($data_cat, $array)));
            header('Location: connexion.html');
        }   
    }

?>