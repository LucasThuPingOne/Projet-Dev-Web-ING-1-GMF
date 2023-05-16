<?php
    $Qte_Commande = $_POST["Qte_Commande"];
    $Stock = $_POST["stock"];
    $res = $Qte_Commande - $Stock;

    echo $res;
    
    


?>