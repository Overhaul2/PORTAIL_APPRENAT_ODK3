
    <?php
    require_once 'connection.php';
    if (isset($_GET['matricule'])) {
        $result = $_GET['matricule'];

        // $requete = "DELETE FROM apprenant WHERE `matricule` ='" . $result . "'";
        $requete = " DELETE FROM apprenants WHERE `matricule`='" . $result . "'";
        $statement = $bddPDO->prepare($requete);
        $statement->bindParam(':matricule', $result);
        $statement->execute();

        $rowCount = $statement->rowCount();
    } else {
        die("Aucun apprenant à supprimer.");
    }
    echo " apprenant Supprimé avec Succès";
    header('location:../listeapprenant.php');
    exit();
    ?>