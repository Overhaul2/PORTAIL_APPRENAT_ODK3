<?php
require_once 'connection.php';
if (isset($_POST['enregistrer'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConfirme = $_POST['passwordConfirme'];

    if (!empty($nom) && !empty($prenom) && !empty($email) && !empty($password) && !empty($passwordConfirme)) {
        $requete = $bddPDO->prepare("INSERT INTO `admin` (`nom`, `prenom`, `email`, `password`, `passwordConfirme`) VALUES (:nom, :prenom, :email, :password, :passwordConfirme)");

        $result = $requete->bindValue(':nom', $nom);
        $result = $requete->bindValue(':prenom', $prenom);
        $result = $requete->bindValue(':email', $email);
        $result = $requete->bindValue(':password', $password);
        $result = $requete->bindValue(':passwordConfirme', $passwordConfirme);
        $result = $requete->execute();

        if (!$result) {
            echo "Un problemme est survennue lors de l'enregistrement";
        } else {
            echo "<script type=\"text/javascript\">alert('Admin enregistrer avec succès') </script>";
        }
    } else {
        echo "Veuiller Remplir tout les Champs";
    }
}
