<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Enregistrement</title>
    <link rel="stylesheet" href="css/form.css">
    <script src="js/script.js"></script>
</head>

<body>
    <!-- ENTÊTE DE PAGE  -->
    <div class="container">
        <header>
            <div class="logo">
                <img src="media/ODK.jpeg" alt="Odk logo">
                <p>Orange <br> Digital Kalanso</p>
            </div>
            <div class="nav_barre">
                <ul>
                    <li> <a href="index.php">Accueil</a></li>
                    <li><a href="listeapprenant.php">Liste</a></li>
                </ul>
            </div>
        </header>
    </div>
    <!-- FIN ENTÊTE DE PAGE  -->
    <!-- FORMULAIRE ENRREGISTREMENT -->
    <div class="form-title">

        <form action="database/connect.php" method="post" enctype="multipart/form-data">
            <p> Enrregistrer Apprénant</p>
            <div class="names">

                <div class="user-box">
                    <span>Nom :</span><input type="text" name="nom" id="name" placeholder="Nom">
                </div>
                <div class="user-box">
                <span>Prénom :</span><input type="text" name="prenom" id="prenom" placeholder="Prenom">
                </div>
                <div class="user-box">
                <span>Âge :</span><input type="number" name="age" id="age" placeholder="Age">
                </div>
                <div class="user-boxd">
                <span>Date de Naissance :</span><input type="date" name="dateNaissance" id="dateDeNaissance" placeholder="Date de Naissance">
                </div>

                <div class="user-box">
                <span>E-mail</span><input type="email" name="email" id="email" placeholder="E_mail">
                </div>

                <div class="user-box">
                <span>Tel :</span><input type="number" name="tel" id="telephone" placeholder="Tel">
                </div>


                <div class="user-box">
                <span>Promotion :</span><input type="text" name="promotion" id="promotion" placeholder="Promotion">
                </div>
                <div class="user-box">
                <span>Année Certification :</span><input type="number" name="certification" id="certification" placeholder="2023"> <br>
                </div>

                <div class="user-box">
                    <input type="file" name="photo" id="photo">
                </div>


            </div>
            <div class="user-input">
                <input type="submit" value="Ajouter" name="ajouter">
            </div>
        </form>
    </div>
    <!-- FIN FORMULAIRE ENRREGISTREMENT -->
    <!-- PIED DE PAGE  -->
    <footer>
        <div class="logo-odk">
            <img src="media/ODK.jpeg" alt="">
        </div>
        <div class="contactez-nous">
            <i class="fa fa-apple" id="apple"></i>
            <i class="fa fa-twitter" id="twitter"></i>
            <i class="fa fa-facebook" id="facebook"></i>
            <i class="fa fa-github" id="github"></i>
        </div>
    </footer>
</body>

</html>