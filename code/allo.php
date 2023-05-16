<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Allo</title>
    <link rel="shortcut icon" href="/img/vachette.jpg" type="image/x-icon">
</head>
<body>
    <?php include('header.php'); ?>
    

    <div class="corps">
        <table align="center">
            <thead>
                <tr>
                    <th colspan="6">
                        Les Allos, à l'huile
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Type d'allos</td>
                    <td>Id</td>
                    <td>Description</td>
                    <td>Prix</td>
                    <td class="stock">Stock</td>
                    <td>Commande</td>
                </tr>
                <tr>
                    <td><b>Allo crepe </b> <p><img class="image_ex" id="crepe" src="/img/crepe.png" alt="crepe"></p> </td>
                    <td>A_01</td>
                    <td>Appelez Paularis pour des crêpes délicieuses</td>
                    <td>0€</td>
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
                    <td><b>Allo kidnapping</b> <p><img class="image_ex" id="kidnapping" src="/img/kidnapping.jpeg" alt="kidnapping"></p></td>
                    <td>A_02</td>
                    <td>Vous voulez disparaitre? Appelez-nous pour un évènement spectaculaire! Tout le monde se souviendra de votre enlevement!</td>
                    <td>0€</td>
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
                    <td><b>Allo Taxi</b><p><img class="image_ex" id="taxi" src="/img/taxi.jpg" alt="taxi"></p></td>
                    <td>A_03</td>
                    <td>Faites appel à nos servies pour  vous déplacer de planète en planètes</td>
                    <td>0€</td>
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
                    <td><b>Allo voyance</b> <p><img class="image_ex" id="voyance" src="/img/voyance.jpg" alt="voyance"></p></td>
                    <td>A_04</td>
                    <td>On ne sait jamais de quoi est fait le lendemain... Maintenant on peut.</td>
                    <td>0€</td>
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
                    <td><b>Allo sandwich</b><p><img class="image_ex" id="sandwich" src="/img/sandwich.jpg" alt="sandwich"></p></td>
                    <td>A_05</td>
                    <td>Livraison d'un délicieux sandwich directement dans votre bouche.</td>
                    <td>0€</td>
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