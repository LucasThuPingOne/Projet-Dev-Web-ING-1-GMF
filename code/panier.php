<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/contact.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="shortcut icon" href="/img/vachette.jpg" type="image/x-icon">
</head>
<body>
    <?php include('header.php'); ?>
    <div class="container">
        <?php 
            echo ("<table align='center'>
                    <thead>
                    <tr>
                    <th colspan='4'>Panier</th>
                    </tr>
                    </thead><tbody>
                    <tr><td>Type</td>
                        <td>Quantité</td>
                        <td>Prix</td>
                        <td>Total</td>
                    </tr>
                    <tr>");
                    $cnx = mysqli_connect('localhost:3306', 'user', 'password1');
            if (mysqli_connect_errno($cnx)) {
            echo mysqli_connect_error();
            };
            $boolRes = mysqli_select_db($cnx, 'php');
            $req = "SELECT * FROM panier";
            $resultat = mysqli_query($cnx, $req);
            $tab = mysqli_fetch_all($resultat, MYSQLI_ASSOC);
            foreach ($tab as $element) {
                echo("<tr>");
                echo("<td>".$element['type']."</td>");
                echo("<td>".$element['qte']."</td>");
                echo("<td>".$element['prix']."</td>");
                echo("<td>".$element['total']."</td></tr></tr>");
            }
            echo("</tbody></table><form action='viderPanier.php' method='POST'><input type='submit' value='Vider le panier'></form>");
        ?>

    </div>
    
</body>
</html>