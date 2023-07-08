<?php
$bddPDO = new PDO('mysql:host=localhost;dbname=portaildb', 'root', "");
$bddPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if (isset($_POST['ajouter'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $dateNaissance = $_POST['dateNaissance'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $photo = $_FILES['photo'];
    $promotion = $_POST['promotion'];
    $certfication = $_POST['certification'];


    
    if (!empty($nom) && !empty($prenom) && !empty($age) && !empty($dateNaissance) && !empty($email) && !empty($tel) && !empty($promotion) && !empty($certfication)) {
        move_uploaded_file($photo['tmp_name'],'../user_image/'.$photo['name']);
        $requete = $bddPDO->prepare("INSERT INTO `apprenant`(`nom`, `prenom`, `age`, `dateNaissance`, `email`, `tel`, `photo`, `promotion`, `anneeCertification`) VALUES (:nom,:prenom,:age,:dateNaissance,:email,:tel,:photo,:promotion,:certification)");

        $result = $requete->bindValue(':nom', $nom);
        $result = $requete->bindValue(':prenom', $prenom);
        $result = $requete->bindValue(':age', $age);
        $result = $requete->bindValue(':dateNaissance', $dateNaissance);
        $result = $requete->bindValue(':email', $email);
        $result = $requete->bindValue(':tel', $tel);
        $result = $requete->bindValue(':photo', $photo['name']);
        $result = $requete->bindValue(':promotion', $promotion);
        $result = $requete->bindValue(':certification', $certfication);

        $result = $requete->execute();

        if (!$result) {
            echo " Un problème est survennue lors de l'enrregistrement";
        } else {
         echo "<script type=\"text/javascript\"> alert('Apprrenant ajouter avec Succès!') </script>";
         header('location:../listeapprenant.php');
           
        }
    } else {
        echo "Veuillez remplire tout les champ";
    }

}
?>