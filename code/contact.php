<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="shortcut icon" href="/img/vachette.jpg" type="image/x-icon">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/contact.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    
</head>
<body>
    <?php 
    session_start();
    include('header.php'); ?>
    

    <div class="corps">
        
        <form action="verifContact.php" method="post">
            <div class="container">
            <?php echo($_SESSION['erreur']); ?>
            <h3 style="color: rgb(201, 159, 24);">Formulaire de contact</h3>
            <label for="date">
                <span>Date de Naissance</span> 
                <input type="date" name="Date_Naissance" id="Date_Naissance" min="1920-01-01" >
            
            </label>
            <label for="name">
                <span>Nom</span> 
                <input type="text"  name="Nom" id="Nom" placeholder="Votre nom"  pattern="^[()a-zA-Z]+$" ><br>
            </label>
            <label for="prenom">
                <span>Prenom</span>
                <input type="text"  name="Prenom" id="Prenom" placeholder="Votre prénom"  pattern="^[()a-zA-Z]+$" ><br>
            </label>
            <label for="tel">
                <span>Numero de Telephone</span>
                <input type="tel" name="Tel" id="Tel" placeholder="Votre numéro de téléphone"  pattern="[0-9]{2}[ -][0-9]{2}[ -][0-9]{2}[ -][0-9]{2}[ -][0-9]{2}">
            </label>
            <label for="email">
                <span>Email</span>
                <input type="email" name="Email" id="Email" placeholder="Votre email" >
            </label>
            
            <label for="genre">
                <span>Genre</span><br> 
                Femme<input type="radio" name="Genre" id="Genre" value="Femme" >
                Homme<input type="radio" name="Genre" id="Genre" value="Homme" >
                Autre<input type="radio" name="Genre" id="Genre" value="Autre" ><br>
            </label>
            <label for="sujet">
                <span>Sujet</span>
                <input type="text" id="Sujet" name="Sujet" placeholder="L'objet de votre message" >
            </label>
            <label for="message">
                <span>Message</span>
                <textarea id="Message" name="Message" placeholder="Votre message" style="height:200px" ></textarea>
            </label>
            <input type="submit" name='Envoyer' value="Envoyer">

            </div>
        </form>
    </div>



    <?php include('footer.php'); ?>
    <!-- <script type="text/javascript" src="/js/site.js"></script> -->
</body>
</html>