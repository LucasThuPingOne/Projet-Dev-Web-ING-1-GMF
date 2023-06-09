/* Gestion de la quantité de commande */
var longueur = document.getElementsByClassName('Qte_Commande').length;
var res = new Array(longueur);
var plus = new Array(longueur);
var moins = new Array(longueur);
var Qte_Commande = new Array(longueur);



for (let i = 0; i < longueur; i++) {
    res[i] = document.getElementsByClassName('Qte_Commande')[i];
    Qte_Commande[i] = parseInt(res[i].value,10)

    plus[i] = document.getElementsByClassName('plus')[i];
    moins[i] = document.getElementsByClassName('moins')[i];
    moins[i].disabled = true;

    res[i].addEventListener('blur', function () {
        Qte_Commande[i] = document.getElementsByClassName('Qte_Commande')[i];
        Qte_Commande[i] = parseInt(Qte_Commande[i].value,10);
    });


    plus[i].addEventListener('click', function() {
        if(Qte_Commande[i] >= 0 && Qte_Commande[i] < 10){
            if (Qte_Commande[i] == 0) {
                moins[i].disabled = false;
            }
            if (Qte_Commande[i] == parseInt(document.getElementsByClassName("stock")[i+1].outerText,10)-1) {
                plus[i].disabled = true;
            }
            Qte_Commande[i]++;
            document.getElementsByClassName('Qte_Commande')[i].value= Qte_Commande[i];
            
        }
    });

    moins[i].addEventListener('click', function() {
        if(Qte_Commande[i] > 0 && Qte_Commande[i] <= 10){
            if (Qte_Commande[i] == 1) {
                moins[i].disabled = true;
            }
            if (Qte_Commande[i] == parseInt(document.getElementsByClassName("stock")[i+1].outerText,10)) {
                plus[i].disabled = false;
            }
            Qte_Commande[i]--;
            document.getElementsByClassName('Qte_Commande')[i].value= Qte_Commande[i];
            
        }
        

    });
    console.log(Qte_Commande[i]);
    
}

/* Gestion de l'affichage ou non du stock via un bouton*/
function afficherStock() {
    for (let i = 0; i< document.getElementsByClassName('stock').length; i++) {
        document.getElementsByClassName("stock")[i].style.display = document.getElementsByClassName('stock')[i].style.display == 'revert' ? "none" : "revert";
    }
    if(document.getElementsByClassName('stock')[1].style.display == 'revert'){
        document.querySelector(".buttonStock").value="Cacher le stock";
    }
    else{
        document.querySelector(".buttonStock").value="Montrer le stock";
    }
}

/* Verification du formulaire */
var tel = document.getElementById('Tel');
var email = document.getElementById('Email');
var nom = document.getElementById('Nom');
var prenom = document.getElementById('Prenom');
var  sujet = document.getElementById('sujet');
var genre = document.getElementById("Genre");
var message = document.getElementById('message');

email.oninvalid = function(e){
    e.target.setCustomValidity();
    if (!e.target.validity.valid) {
        if (e.target.value.length == 0) {
            e.target.setCustomValidity("Ce champ est obligatoire");
        }
        else{
            e.target.setCustomValidity("Entrez une adresse valide. Exemple: contact@nom.com");
        }
    }
}
nom.oninvalid = function(e){
    e.target.setCustomValidity();
    if (!e.target.validity.valid) {
        if (e.target.value.length == 0) {
            e.target.setCustomValidity("Ce champ est obligatoire");
        }
        else{
            e.target.setCustomValidity("Entrez un nom valide.");
        }
    }
}
prenom.oninvalid = function(e){
    e.target.setCustomValidity();
    if (!e.target.validity.valid) {
        if (e.target.value.length == 0) {
            e.target.setCustomValidity("Ce champ est obligatoire");
        }
        else{
            e.target.setCustomValidity("Entrez un prenom valide.");
        }
    }
}

tel.oninvalid = function(e){
    e.target.setCustomValidity();
    if (!e.target.validity.valid) {
        if (e.target.value.length == 0) {
            e.target.setCustomValidity("Ce champ est obligatoire");
        }
        else{
            e.target.setCustomValidity("Entrez un numéro de téléphone valide. Exemple: XX-XX-XX-XX-XX");
        }
    }
}

sujet.oninvalid = function(e){
    e.target.setCustomValidity();
    if (!e.target.validity.valid) {
        if (e.target.value.length == 0) {
            e.target.setCustomValidity("Ce champ est obligatoire");
        }
        else{
            e.target.setCustomValidity("Entrez une chaîne de caractère valide.");
        }
    }
}

genre.oninvalid = function(e){
    e.target.setCustomValidity();
    if (!e.target.validity.valid) {
        e.target.setCustomValidity("Ce champ est obligatoire");
    }
}
message.oninvalid = function(e){
    e.target.setCustomValidity();
    if (!e.target.validity.valid) {
        e.target.setCustomValidity("Ce champ est obligatoire");
    }
}

Date_Naissance.max = new Date().toISOString().split("T")[0];

/*
function actuStock() {
    
    for (let i = 1; i< document.getElementsByClassName('stock').length; i++) {
        document.getElementsByClassName('stock')[i].innerHTML = parseInt(document.getElementsByClassName('stock')[i].innerHTML,10) - parseInt(document.getElementsByClassName("Qte_Commande")[i-1].value,10);
    }
}*/

function actu(element) {
    longueur = document.getElementsByClassName('stock').length;
    
        var url = new URL(window.location.href);
        var cat = url.searchParams.get("cat");
        var Qte_Commande = parseInt(element.parentNode.querySelector(".Qte_Commande").value,10);
        var prix = parseInt(element.parentNode.parentNode.querySelector(".prix").innerHTML,10);
        var stock = parseInt(element.parentNode.parentNode.querySelector(".stock").innerHTML,10);
        var id = element.parentNode.parentNode.querySelector(".image_ex").id; 
        var panier = parseInt(document.getElementById('panier1').innerHTML,10) + Qte_Commande*prix;
        var type = element.parentNode.parentNode.querySelector(".type").innerHTML;
        // On définit que l'on va faire à chq changement d'état
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            // On ne fait quelque chose que si on a tout reç̧u
            // et que le serveur est ok
            if (this.readyState == 4 && this.status == 200){
                element.parentNode.parentNode.querySelector(".stock").innerHTML = this.responseText;
                document.getElementById('panier1').innerHTML = panier+"€";
            }
        }
        xhttp.open("POST","actuStock.php",true) ;
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send("Qte_Commande="+Qte_Commande+"&stock="+stock+"&id_img="+id+"&cat="+cat+"&prix="+prix+"&type="+type);

}
