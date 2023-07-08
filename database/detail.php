<!DOCTYPE html>
<html lang="fr">
<?php
$bddPDO = new PDO('mysql:host=localhost;dbname=portaildb', 'root', "");
$bddPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$matricule = $_REQUEST["matricule"];
$ptsmt = $bddPDO->prepare("SELECT * FROM apprenant WHERE matricule = $matricule ");
$ptsmt->execute();
$apprenant = $ptsmt->fetchAll();

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Details</title>
    <link rel="stylesheet" href="../css/form.css">
    <script src="../js/script.js"></script>
</head>

<body>
    <!-- ENTÊTE DE PAGE -->
    <div class="container">
        <header>
            <div class="logo">
                <img src="media/ODK.jpeg" alt="Odk logo">
                <p>Orange <br> Digital Kalanso</p>
            </div>
            <div class="nav_barre">
                <ul>
                    <li> <a href="../index.php">Accueil</a></li>
                    <li><a href="../listeapprenant.php">Liste</a></li>
                </ul>
            </div>
        </header>
    </div>
    <!-- FIN ENTÊTE DE PAGE  -->
    <!-- FORMULAIRE ENRREGISTREMENT -->
    <section>
    <p> Information Sur Apprénant</p>
        <div class="detail">
            <div class="detail-input">
                <?php foreach ($apprenant as $app) : ?>

                    <h3 class="info"><span>Nom :</span><?= $app['nom'] ?></h3>
                    <h3 class="info"><span>Prenom :</span><?= $app['prenom'] ?></h3>
                    <h3 class="info"><span>Âge :</span><?= $app['age'] ?></h3>
                    <h3 class="info"><span>Date de Naissance :</span><?= $app['dateNaissance'] ?></h3>
                    <h3 class="info"><span>E-mail :</span><?= $app['email'] ?></h3>
                    <h3 class="info"><span>Téléphone:</span><?= $app['tel'] ?></h3>
                    <h3 class="info"><span>Promotion :</span><?= $app['promotion'] ?></h3>
                    <h3 class="info"><span>Année Certification :</span><?= $app['anneeCertification'] ?></h3>
                <?php endforeach; ?>
            </div>
            <div class="image-profile">
                <img src="user_image/IMG_1202.jpeg" alt="photo-profile">
                <div class="shadow"></div>
            </div>
        </div>
    </section>



    <footer>
        <div class="logo-odk">
            <img src="media/ODK.jpeg" alt="">
        </div>
        <div class="contactez-nous">
            <a href="https://www.apple.com/" target="_blank"> <i class="fa fa-apple" id="apple"></i></a>
            <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" id="twitter"></i></a>
            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" id="facebook"></i></a>
            <a href="https://github.com/" target="_blank"><i class="fa fa-github" id="github"></i></a>
        </div>
    </footer>
</body>

</html>