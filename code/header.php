<?php session_start(); ?>
        

<header class="header-outer">    
    <div class="dCo">
        <?php 
            if ($_SESSION['connexion'] == 1) {
            echo("<p class='userCo'>Bonjour ".$_SESSION['login']." </p>
            <p><form id='deco'  action='Verif_Connexion.php' method='post'>
                <input type='hidden' name='a_recup' value='1'/>
                <input class='btn' type='submit' value='Déconnexion'>
            </form>
            </p>
            ");
            
            }
            else {
                echo("<a href='/code/connexion.html' id='connexion' class='connexion' >Connexion</a>");
                
            }
        ?>
        
        <img class="CY_Tech" src="/img/CY_Tech.svg.png" alt="CY_Tech">
    </div>
    <div class=" responsive-wrapper">
        
        <h1 class="titre">Formations en ligne</h1>
    </div>
        <nav class="header-navigation header-inner">
            <a class="nav" href="accueil.php">Acceuil</a> |
            <a class="nav" href="produits.php?cat=formation">Formation en Ligne</a> |
            <a class="nav" href="produits.php?cat=objet">Objets dérivées</a> |
            <a class="nav" href="produits.php?cat=allo">Allos</a> |
            <a class="nav" href="contact.php">Contact</a>
            <a class="nav" href="panier.php"><p>Panier: <span id="panier1"> <?php echo($_SESSION['panier']); ?> €</span> </p></a>
        </nav>
        
    
        

</header>
