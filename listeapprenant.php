<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Liste des Apprenants</title>
    <link rel="stylesheet" href="css/stylez.css">
</head>

<body>

    <div class="container">
        <header>

            <div class="logo">
                <img src="media/ODK.jpeg" alt="Odk logo">
                <p>Orange <br> Digital Kalanso</p>
            </div>
            <div class="nav_barre">
                <ul>
                    <li> <a href="index.php">Accueil</a></li>
                    <!-- <li><a href="">Formation</a></li>
                    <li><a href="listeapprenant.php">Se Connecter</a></li> -->
                </ul>
            </div>
        </header>
    </div>
    <!-- Connexion à la base de données -->
    <?php
require_once 'database/connection.php';
$requete = "SELECT * FROM `apprenants`  ORDER BY nom ASC";
    $result = $bddPDO->query($requete);
    if (!$result) {
        echo "Une erreur s'est produite !";
    } else {
        $nombreApprenants = $result->rowCount();
    }
    ?>
    <h3><U>Liste des apprenants Certifiés</U></h3>
    <h4>Ils y'a <?php echo $nombreApprenants; ?> Apprenant Certifiés</h4>
    <h3><a href="addapp.php">Ajouter un nouveau appprenant</a></h3>
    <div class="table">
        <table>
            <tr>
                <th>Matricule</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Âge</th>
                <th>Date de Naissance</th>
                <th>E-mail</th>
                <th>Tel</th>
                <th>Photo</th>
                <th>Promotion</th>
                <th>Année Certification</th>
                <th>Actions</th>

            </tr>
            <?php
            // while ($ligne = $result->fetch(PDO::FETCH_NUM)) {
            //     echo "<tr>";
            //     foreach ($ligne as $valeur) {
            //         echo "<td>$valeur</td>";
            //     }
            //     echo "</tr>";
            foreach ($result as $app) : ?>
                <tr>
                    <td><?= $app['matricule'] ?></td>
                    <td><?= $app['nom'] ?></td>
                    <td><?= $app['prenom'] ?></td>
                    <td><?= $app['age'] ?></td>
                    <td><?= $app['dateNaissance'] ?></td>
                    <td><?= $app['email'] ?></td>
                    <td><?= $app['tel'] ?></td>
                    <td><img width="80px" height="80px" style="border-radius: 50%;" src="./user_image/<?= $app['photo'] ?>" /></td>
                    <td><?= $app['promotion'] ?></td>
                    <td><?= $app['anneeCertification'] ?></td>

                    <?php

                    echo "<td><a href='database/suppapp.php?matricule=" . $app['matricule'] . "' class='Supp' >&#x1F5D1; </a> <a href='database/detail.php?matricule=" . $app['matricule'] . "' class='detail'>	&#x1F441;</a> <a href=database/edit.php?matricule=" .$app['matricule'] ." 'class='edit'>&#x1F589;</a></td>";
                    ?>

                </tr>
            <?php endforeach; ?>


            <!-- } -->

        </table>
    </div>
    <?php
    $result->closeCursor();
    ?>
    <!-- //pagination  -->
    <!-- <?php
            $req = $bddPDO->query('SELECT matricule FROM apprenants');
            $nombre_Total_Apprenants_page = 10;

            $nbre_pages = ceil($nombre_Total_Apprenants_page / $nbre_pages);
            if (isset($_GET['page']) && is_numeric($_GET['page'])) {
                $page_num = $_GET['page'];
            } else {
                $page_num = 1;
            }

            if ($page_num < 1) {
                $page_num = 1;
            } else if ($page_num > $last_page) {
                $page_num = $last_page;
            }
            //Calcul du début et de la fin des résultats à afficher sur cette page
            $limit = 'LIMIT' . ($page_num - 1) * $nombre_Total_Apprenants_page . ',' . $nombre_Total_Apprenants_page;
            //requette a utiliser
            $sql = 'SELECT matricule, nom, prenom, age, dateNaissance, email, tel, photo, promotion; anneeCertification'
            ?>   -->
    <!-- Fin pagination  -->
  <div class="lien"> <a href="index.php">Accueil</a></div>
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