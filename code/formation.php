<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/header.css">
        <link rel="stylesheet" href="/css/footer.css">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <title>Formation</title>
        <link rel="shortcut icon" href="/img/vachette.jpg" type="image/x-icon">
        
    </head>
    <body>
        <?php include('header.php'); ?>
        

        <div class="corps">
            <table align="center">
                <thead>
                    <tr>
                        <th colspan="6">
                            Les Formations en ligne
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Type de formation</td>
                        <td>Id</td>
                        <td>Description</td>
                        <td>Prix</td>
                        <td class="stock">Stock</td>
                        <td>Commande</td>
                    </tr>
                    <tr>
                        <td><b>La drague en 10 étapes </b> <p><img class="image_ex" id="disquette" src="/img/disquette.jpg" alt="disquette"></p> </td>
                        <td>F_01</td>
                        <td>Apprenez facilement et rapidement à accoster des individus dans diverses situations même les plus incongrues</td>
                        <td>500€</td>
                        <td class="stock">10</td>
                        <td>
                            <form>
                                <input class="moins" type="button" value="-" />
                                <input type="text" class="Qte_Commande" value="0" maxlengh="2"> 
                                <input class="plus" type="button" value="+" />
                                <br><button id="ajoutPanier" class="ajoutPanier" type="button">Ajouter au panier</button>
                            </form>
                            
                        </td>
                    </tr>
                    <tr>
                        <td><b>S'exprimer en public</b> <p><img class="image_ex" id="expression" src="/img/expression.webp" alt="expression_public"></p></td>
                        <td>F_02</td>
                        <td>Apprenez à vous exprimer en public facilement et rapidement grace aux conseils de nos formateurs reconnus par l'état</td>
                        <td>800€</td>
                        <td class="stock">10</td>
                        <td>
                            <form>
                                <input class="moins" type="button" value="-" />
                                <input type="text" class="Qte_Commande" value="0" maxlengh="2"> 
                                <input class="plus" type="button" value="+" />
                                <br><button id="ajoutPanier" class="ajoutPanier" type="button">Ajouter au panier</button>
                            </form>
                            
                        </td>
                    </tr>
                    <tr>
                        <td><b>Affronter ses peurs</b><p><img class="image_ex" id="peur" src="/img/peur.jpg" alt="peur"></p></td>
                        <td>F_03</td>
                        <td>Il n'y a pas de théorie que de la pratique! Nous sommes capables de vous mettre face à toutes vos peur!</td>
                        <td>1000€</td>
                        <td class="stock">10</td>
                        <td>
                            <form>
                                <input class="moins" type="button" value="-" />
                                <input type="text" class="Qte_Commande" value="0" maxlengh="2"> 
                                <input class="plus" type="button" value="+" />
                                <br><button id="ajoutPanier" class="ajoutPanier" type="button">Ajouter au panier</button>
                            </form>
                            
                        </td>
                    </tr>
                    <tr>
                        <td><b>Devenir riche en moins de 3 mois</b> <p><img class="image_ex" id="riche" src="/img/riche.jpg" alt="riche"></p></td>
                        <td>F_04</td>
                        <td>Bill Gate n'avez pas cette formation... Vous, vous l'avez.</td>
                        <td>2000€</td>
                        <td class="stock">10</td>
                        <td>
                            <form>
                                <input class="moins" type="button" value="-" />
                                <input type="text" class="Qte_Commande" value="0" maxlengh="2"> 
                                <input class="plus" type="button" value="+" />
                                <br><button id="ajoutPanier" class="ajoutPanier" type="button">Ajouter au panier</button>
                            </form>
                            
                        </td>
                    </tr>
                    <tr>
                        <td><b>Décupler sa productivité</b><p><img class="image_ex" id="productivite" src="/img/productivite.jpg" alt="productivite"></p></td>
                        <td>F_05</td>
                        <td>1000 pompes par jour, boire de la lave, se doucher avec de la neige... Vous avez toutes les clés en main</td>
                        <td>2500€</td>
                        <td class="stock">10</td>
                        <td>
                            <form>
                                <input class="moins" type="button" value="-" />
                                <input type="text" class="Qte_Commande" value="0" maxlengh="2"> 
                                <input class="plus" type="button" value="+" />
                                <br><button id="ajoutPanier" class="ajoutPanier" type="button">Ajouter au panier</button>
                            </form>
                            
                        </td>
                    </tr>
                </tbody>
            </table>
            <input class="buttonStock" type="button" value="Montrer stock" onclick=afficherStock()>
        </div>

        <?php include('footer.php'); ?>
        <script type="text/javascript" src="/js/site.js"></script>
    </body>
</html>