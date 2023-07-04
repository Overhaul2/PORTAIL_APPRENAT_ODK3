
    <?php
$bddPDO = new PDO('mysql:host=localhost;dbname=portaildb', 'root', "");
$bddPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_GET['matricule'])){
    $result = $_GET['matricule'];

    $requete = "DELETE FROM apprenant WHERE `matricule` ='" . $result. "'";
    $statement = $bddPDO->prepare($requete);
    $statement->bindParam(':matricule', $result);
    $statement->execute();

    $rowCount = $statement->rowCount();       

} else {
    die("Aucun apprenant à supprimer.");
}
header('location:../listeapprenant.php');
        exit();
?>