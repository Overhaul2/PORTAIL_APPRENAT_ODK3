<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement</title>
    <link rel="stylesheet" href="css/style.index.css">
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
                    <li><a href="">Formation</a></li>
                    <li><a href="">Se Connecter</a></li>
                </ul>
            </div>
        </header>
    </div>


    <div class="form-title">
        <p>Enrregistrer Apprenant</p>

        <!-- formulaire Enregistrement Apprenant -->
        <form action="database/connect.php" method="post">
            <div class="names">

                <div class="user-box">
                    <label for="nom">Nom:</label>
                    <input type="text" name="nom" id="name" placeholder="">

                </div>
                <div class="user-box">
                    <label for="prenom">Prénom:</label>
                    <input type="text" name="prenom" id="prenom" placeholder="">

                </div>


                <div class="user-box">
                    <label for="age">Âge:</label>
                    <input type="number" name="age" id="age" required>
                </div>

                <div class="user-box">
                    <label for="dateDeNaissance">Date de Naissance:</label>
                    <input type="date" name="dateNaissance" id="dateDeNaissance">
                </div>

                <div class="user-box">
                    <label for="email">E_mail:</label>
                    <input type="email" name="email" id="email" placeholder="">
                </div>

                <div class="user-box">
                    <label for="telephone">Tel:</label>
                    <input type="number" name="tel" id="telephone" placeholder="">
                </div>


                <div class="user-box">
                    <label for="promotion">promotion:</label>
                    <input type="text" name="promotion" id="promotion">
                </div>
                <div class="user-box">
                    <label for="date certfication">Certificaton:</label>
                    <input type="number" name="certfication" id="certfication"> <br>
                </div>
                <div class="user-box">
                    <label for="photo">Photo:</label>
                    <input type="file" name="photo" id="photo">
                </div>


            </div>
            <div class="user-input">
                <input type="submit" value="Ajouter" name="ajouter">
            </div>
        </form>
    </div>

    <!-- PIED DE PAGE  -->
    <footer>
        <div class="logo-odk">
            <img src="media/ODK.jpeg" alt="">
        </div>
    </footer>
</body>

</html>