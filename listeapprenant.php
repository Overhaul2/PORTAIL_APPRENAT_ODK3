<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <li> <a href="addapp.php">Accueil</a></li>
                    <li><a href="">Formation</a></li>
                    <li><a href="listeapprenant.php">Se Connecter</a></li>
                </ul>
            </div>
        </header>
    </div>
    <!-- Connexion à la base de données -->
    <?php
    $bddPDO = new PDO('mysql:host=localhost;dbname=portaildb', 'root', "");
    $bddPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $requete = "SELECT * FROM `apprenant`  ORDER BY nom ASC";
    $result = $bddPDO->query($requete);
    if (!$result) {
        echo "Une erreur s'est produite !";
    } else {
        $nombreApprenants = $result->rowCount();
    }
    ?>
    <h3>Liste des apprenants Certifiés</h3>
    <h4>Il y a <?php echo $nombreApprenants; ?> Apprenant Certifiés</h4>
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
            <th>Modification</th>
            
        </tr>
        <?php
        // while ($ligne = $result->fetch(PDO::FETCH_NUM)) {
        //     echo "<tr>";
        //     foreach ($ligne as $valeur) {
        //         echo "<td>$valeur</td>";
        //     }
        //     echo "</tr>";
            foreach($result as $app) :?>
            <tr>
                <td><?= $app['matricule']?></td>
                <td><?= $app['nom']?></td>
                <td><?= $app['prenom']?></td>
                <td><?= $app['age']?></td>
                <td><?= $app['dateNaissance']?></td>
                <td><?= $app['email']?></td>
                <td><?= $app['tel']?></td>
                <td><img style="border-radius: 50%;" src="data.image/jpg;charset=utf8;base64 <?php echo base64_encode($app ['photo']);?>"width="80px" height="80px"/></td>
                <td><?= $app['promotion']?></td>
                <td><?= $app['anneeCertification']?></td>
                
<?php 

echo "<td><a href='database/suppapp.php?matricule=". $app['matricule'] ."' class='wastedbasket'>&#128465; </a></td>";
?>

            </tr>
            <?php endforeach; ?>


        <!-- } -->
        
    </table>
    <?php
    $result->closeCursor();
    ?>

    <br><a href="/index.html">Accueil</a>
</body>

</html>
