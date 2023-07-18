<?php
require_once 'connection.php';
if(isset($_POST['modifier'])){
    $matricule = $_GET['matricule'];
    $nom= $_POST['nom'];
    $prenom= $_POST['prenom'];
    $age= $_POST['age'];
    $dateNaissance= $_POST['dateNaissance'];
    $email= $_POST['email'];
    $tel= $_POST['tel'];
    $photo = $_FILES['photo'];
    $promotion= $_POST['promotion'];
    $certfication= $_POST['certification'];
    if(!empty($nom) && !empty($prenom) && !empty($age) && !empty($dateNaissance) && !empty($email) && !empty($tel) && ! empty($promotion) && !empty($certification)){
        move_uploaded_file($photo['tmp_name'],'../user_image/'.$photo['name']);
        $requette= $bddPDO->prepare("UPDATE apprenants SET email=:email, nom=:nom, prenom=:prenom, age=:age, dateNaissance=:dateNaissance, email=:email, tel=:tel, promotion=:promotion,photo=:photo, certification=:certification WHERE matricule=$matricule");
        
        $result= $requette->bindValue(':nom', $nom);
        $result= $requette->bindValue(':prenom',$prenom);
        $result=$requette->bindValue(':age',$age);
        $result=$requette->bindValue(':dateNaissance',$dateNaissance);
        $result=$requette->bindValue(':email',$email);
        $result=$requette->bindValue(':tel',$tel);
        $result= $requete->bindValue(':photo', $photo['name']);
        $result=$requette->bindValue(':promotion',$promotion);
        $result=$requette->bindValue(':certification',$certification);

        $result=$requette->execute();

        if (!$result){
            echo "Un probleme est survennue lors de la modification";
        }else{
            echo " <script type=\"text/javascript\"> alert ('Modification reçue avec succès')</script>";
            header('location:../listeapprenant.php');
            
        }
    }else {echo "Veuillez remplir tout les Champ";

        }
    }
?>