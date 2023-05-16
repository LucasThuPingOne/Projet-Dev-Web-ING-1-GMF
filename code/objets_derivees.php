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
                        Les Objets dérivées
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Type d'Objets</td>
                    <td>Id</td>
                    <td>Description</td>
                    <td>Prix</td>
                    <td class="stock">Stock</td>
                    <td>Commande</td>
                </tr>
                <tr>
                    <td><b>L'oreiller </b> <p><img class="image_ex" id="oreiller" src="/img/oreiller.avif" alt="oreiller"></p> </td>
                    <td>O_01</td>
                    <td>Le plus important dans le développement personnel c'est le sommeil.</td>
                    <td>50€</td>
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
                    <td><b>Le plaid</b> <p><img class="image_ex" id="plaid" src="/img/plaid.webp" alt="plaid"></p></td>
                    <td>O_02</td>
                    <td>La chaleur est la base fondamentale du développement personnel</td>
                    <td>70€</td>
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
                    <td><b>La casquette</b><p><img class="image_ex" id="casquette" src="/img/casquette.avif" alt="casquette"></p></td>
                    <td>O_03</td>
                    <td>Le soleil est votre ennemi et cette casquette votre ami.</td>
                    <td>25€</td>
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
                    <td><b>Le livre</b> <p><img class="image_ex" id="livre" src="/img/livre.jpg" alt="livre"></p></td>
                    <td>O_04</td>
                    <td>Pour vous inciter à acheter des formations en lignes</td>
                    <td>50€</td>
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
                    <td><b>Le t-shirt</b><p><img class="image_ex" id="tshirt" src="/img/tshirt.jpg" alt="tshirt"></p></td>
                    <td>O_05</td>
                    <td>Montrer à tous que vous êtes le nouveau Oussama Amar</td>
                    <td>80€</td>
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