/* Déclaration de la fonction validation pour valider les données */
function validation() {
    var form = document.querySelector("../addapp.php").value;
    var prenom = document.getElementById("prenom").value;
    var nom = document.getElementById("nom").value;
    var date = document.getElementById("date").value;
    var email = document.getElementById("email").value;
    var tel = document.getElementById("tel").value;
    var promotion = document.getElementById("promotion").value;
    var annee = document.getElementById("annee").value;
    var photo = document.forms["../addapp.php"]["photo"];
    var validExt = ["jpeg", "png", "jpg"];
    var erreur = document.getElementById("erreur");
    // var error_sound = document.getElementById("error_sound");
    // var succes_sound = document.getElementById("succes_sound");
    var mail_incorrect = document.getElementById("mail_incorrect");
    var text;






    erreur.style.padding = "4px";
    erreur.style.color = "white";

    /* La validation de l'adresse mail*/
    if (email.indexOf("@") == -1 || email.length < 6) {
        text = email + " - " + " n'est pas une adresse mail valide";
        error_sound.play();
        mail_incorrect.play();
        erreur.innerHTML = text;
        return false;
    }

    /* La validation de numéro de téléphone*/
    if (isNaN(tel) || tel.length != 8) {
        text = "Entrez un numéro de téléphone valide";
        error_sound.play();
        // var tel_incorrect = new Audio;
        // tel_incorrect.src="sound/tel_incorrect.mp3"
        // tel_incorrect.play();
        // erreur.innerHTML = text;
        return false;
    }

    /* La validation du numéro de promotion*/
    if (promotion.length != 2) {
        text = "Entrez un numéro promotion valide comme P1 pour promotion 1";
        error_sound.play();
        erreur.innerHTML = text;
        return false;
    }
    /* La validation de l'image et de son type*/
    if (photo.value != '') {
        var img_ext = photo.value.substring(photo.value.lastIndexOf(".") + 1);
        var result = validExt.includes(img_ext);
        if (result == false) {
            text = "Veuillez choisir un fichier image";
            // error_sound.play();
            // erreur.innerHTML = text;
            return false;
        }

    } else {
        text = "Veillez choisir une image";
        // error_sound.play();
        erreur.innerHTML = text;
        return false;
    }

    // succes_sound.play();
    alert("Enregistrement effectué avec succès");
    return true;
}