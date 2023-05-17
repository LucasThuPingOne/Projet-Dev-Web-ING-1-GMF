<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <title>Produits</title>
    <link rel="shortcut icon" href="/img/vachette.jpg" type="image/x-icon">
</head>
<body>
    <?php 
        session_start(); 
        $file = "../data"."/".$_GET['cat'].".json";
        $data = file_get_contents($file);
        $data_cat = json_decode($data);
        $len = sizeof($data_cat);
        
        include('header.php'); 
    ?>
    <div class="corps">
        <?php 
            $cnx = mysqli_connect('localhost:3306', 'user', 'password1');
            if (mysqli_connect_errno($cnx)) {
                echo mysqli_connect_error();
            };
            $boolRes = mysqli_select_db($cnx, 'php');
            if (!$boolRes) throw new Exception($base.' introuvable');
            echo ("<table align='center'>
                    <thead>
                        <tr>
                            <th colspan='6'>");
            if ($_GET['cat']=="formation") {
                echo("Les Formations en ligne");
            }
            elseif ($_GET['cat']=="objet") {
                echo("Les objets dérivés");
            }
            elseif ($_GET['cat']=="allo") {
                echo("Les allos, à l'huile");
            }
            
            echo("</th>
                </tr>
                </thead><tbody>");
            
                    echo ("<tr>");
                    if ($_GET['cat']=="formation") {
                        echo("<td>Type de formation</td>");
                        echo("<td>Id</td>
                        <td>Description</td>
                        <td>Prix</td>
                        <td class='stock'>Stock</td>
                        <td>Commande</td></tr>");
                    
                        echo("<tr>");
                        $req = "SELECT * FROM formation";
                        $resultat = mysqli_query($cnx, $req);
                        $tab = mysqli_fetch_all($resultat, MYSQLI_ASSOC);
                        foreach ($tab as $element) {
                        echo("<tr>");
                        echo("<td><b class='type'>".$element['type']);
                        echo("</b> <p><img class='image_ex' id='".$element['id_img']."'");
                        echo(" src='".$element['img']."' alt='' </p> </td>");
                        echo("<td>".$element['id']."</td>");
                        echo("<td>".$element['description']."</td>");
                        echo("<td id='prix' class='prix'>".$element['prix']."</td>");
                        echo("<td id='Stock' class='stock' value='".$element['stock']."'>".$element['stock']."</td>");
                        echo("<td>
                        <input class='moins' type='button' value='-' />
                        <input type='text' name='Qte_Commande' class='Qte_Commande' value='0' maxlengh='2'/> 
                        <input class='plus' type='button' value='+'' />
                        <br><button  id='ajoutPanier' onclick='actu(this)' class='ajoutPanier'>Ajouter au panier</button>
                        </td></tr>");
                        echo("</tr>");
                        }
                        echo ("</tbody>
                        </table><input class='buttonStock' type='button' value='Montrer stock' onclick=afficherStock()>");
                            
                        
                        
                    
                    }
                    elseif ($_GET['cat']=="objet") {
                        echo("<td>Les types d'objets</td>");
                        echo("<td>Id</td>
                        <td>Description</td>
                        <td>Prix</td>
                        <td class='stock'>Stock</td>
                        <td>Commande</td></tr>");
                    
                        echo("<tr>");
                        $req = "SELECT * FROM objet";
                        $resultat = mysqli_query($cnx, $req);
                        $tab = mysqli_fetch_all($resultat, MYSQLI_ASSOC);
                        foreach ($tab as $element) {
                        echo("<tr>");
                        echo("<td><b class='type'>".$element['type']);
                        echo("</b> <p><img class='image_ex' id='".$element['id_img']."'");
                        echo(" src='".$element['img']."' alt='' </p> </td>");
                        echo("<td>".$element['id']."</td>");
                        echo("<td>".$element['description']."</td>");
                        echo("<td id='prix' class='prix'>".$element['prix']."</td>");
                        echo("<td id='Stock' class='stock' value='".$element['stock']."'>".$element['stock']."</td>");
                        echo("<td>
                        <input class='moins' type='button' value='-' />
                        <input type='text' name='Qte_Commande' class='Qte_Commande' value='0' maxlengh='2'/> 
                        <input class='plus' type='button' value='+'' />
                        <br><button  id='ajoutPanier' onclick='actu(this)' class='ajoutPanier'>Ajouter au panier</button>
                        </td></tr>");
                        echo("</tr>");
                        }
                        echo ("</tbody>
                        </table><input class='buttonStock' type='button' value='Montrer stock' onclick=afficherStock()>");
                    }
                    elseif ($_GET['cat']=="allo") {
                        echo("<td>Les types d'allos</td>");
                        echo("<td>Id</td>
                        <td>Description</td>
                        <td>Prix</td>
                        <td class='stock'>Stock</td>
                        <td>Commande</td></tr>");
                    
                        echo("<tr>");
                        $req = "SELECT * FROM allo";
                        $resultat = mysqli_query($cnx, $req);
                        $tab = mysqli_fetch_all($resultat, MYSQLI_ASSOC);
                        foreach ($tab as $element) {
                        echo("<tr>");
                        echo("<td><b class='type'>".$element['type']);
                        echo("</b> <p><img class='image_ex' id='".$element['id_img']."'");
                        echo(" src='".$element['img']."' alt='' </p> </td>");
                        echo("<td>".$element['id']."</td>");
                        echo("<td>".$element['description']."</td>");
                        echo("<td id='prix' class='prix'>".$element['prix']."</td>");
                        echo("<td id='stock' class='stock' value='".$element['stock']."'>".$element['stock']."</td>");
                        echo("<td>
                        
                        <input class='moins' type='button' value='-' />
                        <input type='text' name='Qte_Commande' class='Qte_Commande' value='0' maxlengh='2'/> 
                        <input class='plus' type='button' value='+'' />
                        <br><button  id='ajoutPanier' onclick='actu(this)' class='ajoutPanier'>Ajouter au panier</button>
                                 
                        </td></tr>");
                        echo("</tr>");
                        }
                        echo ("</tbody>
                        </table><input class='buttonStock' type='button' value='Montrer stock' onclick=afficherStock()>");
                    }
                    
            
            fclose($data);
        ?>
    </div>
    <?php include('footer.php'); ?>
    <script type="text/javascript" src="/js/site.js"></script>
</body>
</html>