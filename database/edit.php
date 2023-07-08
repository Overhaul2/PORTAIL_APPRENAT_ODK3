<?php
$bddPDO = new PDO('mysql:host=localhost;dbname=portaildb', 'root', "");
$bddPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$matricule = $_REQUEST["matricule"];
$prepareStatement = $bddPDO->prepare("SELECT * FROM apprenant WHERE matricule=$matricule ");
$reponseIsOK = $prepareStatement->execute();
$apprenant = $prepareStatement->fetchAll();
?>


<!DOCTYPE html>
<html lang="fr">




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
                <form action="update.php" method="post">
                    <?php foreach ($apprenant as $app) : ?>
                        Nom :<input type="text" name="nom" value="<?= $app['nom'] ?>"> <br>
                        Prenom :<input type="text" name="prenom" value="<?= $app['prenom'] ?>"> <br>
                        Âge :<input type="number" name="age" value="<?= $app['age'] ?>"> <br>
                        Date de Naissance :<input type="date" name="dateNaissance" value="<?= $app['dateNaissance'] ?>"> <br>
                        E-mail :<input type="text" name="email" value="<?= $app['email'] ?>"> <br>
                        Téléphone: <input type="number" name="tel" value="<?= $app['tel'] ?>"> <br>
                        Promotion : <input type="text" name="promotion" value="<?= $app['promotion'] ?>"> <br>
                        Année Certification : <input type="number" name="certification" value="<?= $app['anneeCertification'] ?>">
                        Photo : <input type="file" name="photo" value="<?='../user_image/'.$app['photo']['name'] ?>">
                    <?php endforeach; ?>
                    <input type="submit" value="Modifier" name="modifier">

                </form>
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