<?php 
    session_start();
    
    if ($_POST['a_recup'] == 1) {
        header('Location: viderPanier.php');
        session_destroy();
        
        exit();
    }
    else {
        $cnx = mysqli_connect('localhost:3306', 'user', 'password1');
        if (mysqli_connect_errno($cnx)) {
            echo mysqli_connect_error();
        };
        $boolRes = mysqli_select_db($cnx, 'php');
        if (!$boolRes) throw new Exception($base.' introuvable');
        $req = "SELECT * FROM user WHERE login = \"".$_POST["login"]."\" AND password = \"".$_POST["password"]."\";";
        $resultat = mysqli_query($cnx, $req);
        $numrow = mysqli_num_rows($resultat);
        echo ($numrow);
        if ($numrow == 1) {
            $_SESSION['connexion'] = 1;
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['panier'] = 0;
            header('Location: viderPanier.php');
            exit();
        }
                    
        elseif ($numrow == 0) {
            //header('Location: connexion.html');
        }
    }
?>