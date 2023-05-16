<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Vachette</title>
    <link rel="shortcut icon" href="/img/vachette.jpg" type="image/x-icon">
</head>
<body>

    <?php 
        include('header.php'); 
        include('bdd.php');
        session_start();
    ?>

    <div class="corps">
        <aside class="citation">
            <i><b>&#8220</b>Un pessimiste voit la difficulté dans chaque opportunité, un optimiste voit l'opportunité dans chaque difficulté.<b>&#8220</b></i>
        </aside>
    </div>
    
    <?php include('footer.php'); ?>
</body>
</html>