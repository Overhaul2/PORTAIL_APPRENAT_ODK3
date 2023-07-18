<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleadmin.css">
    <title>Login</title>
</head>

<body>
    <!-- nav bar  -->

    <div class="container">
        <header>

            <div class="logo">
                <img src="media/ODK.jpeg" alt="Odk logo">
                <p>Orange <br> Digital Kalanso</p>
            </div>
        </header>
    </div>
    <!-- fin nav bar  -->
    <div class="formulaire">
        <div class="wrapper">

            <!-- PARTI S'ENREGISTRER  -->
            <div class="form-wrapper sing-up">
                <form method="POST" action="database/login.php">
                    <h2>Créer un compte</h2>
                    <div class="input-group">
                        <input type="text" name="nom" id="nom" placeholder="FOMBA">
                        <label for="nom">Nom</label>
                    </div>
                    <div class="input-group">
                        <input type="text" name="prenom" id="prenom" placeholder="Souleyùane">
                        <label for="prenom">Prénom</label>
                    </div>
                    <div class="input-group">
                        <input type="email" name="email" id="email" placeholder="azer@gmail.com">
                        <label for="email">Adresse E_mail
                        </label>
                    </div>
                    <div class="input-group">
                        <input type="password" name="password" id="password" placeholder="******">
                        <label for="password">Mot de passe</label>

                        <!-- AFFICHER LE MOT DE PASSE  -->
                        <!-- <input type="checkbox" name="" id="check">
                    <script>
                        check.onclick = togglepassword;

                        function togglepassword() {
                            if (check.checked) password.type = "text";
                            else password.type = "password";
                        }
                    </script> -->
                    </div>
                    <div class="input-group">
                        <input type="password" name="passwordConfirme" id="passwordConfirme" placeholder="******">
                        <label for="passwordConfirme">Mot de passe confirme</label>
                    </div>
                    <input type="submit" class="btn" name="enregistrer" value="S'inscrire"></button>
                    <div class="sing-link">
                        <p>Avez vous déjà un compte? <a href="#" class="singin-link">Se Connecter</a></p>
                    </div>
                </form>
            </div>
            <!--FIN PARTI S'ENREGISTRER  -->

            <!-- PARTIN CONNECTION  -->
            <div class="form-wrapper sing-in">
                <form action="">
                    <h2>Se Connecter</h2>
                    <div class="input-group">
                        <input type="email" name="email" id="email" placeholder="azer@gmail.com">
                        <label for="nom">Adress-Email</label>
                    </div>
                    <div class="input-group">
                        <input type="password" name="password" id="password" placeholder="******">
                        <label for="password">Mot de passe</label>
                    </div>
                    <div class="forgot-pass">
                        <a href="#">Mot de passe oublé ?</a>
                    </div>
                    <button type="submit" class="btn">Login</button>
                    <div class="sing-link">
                        <p>Vous n'avez pas de compte? <a href="#" class="singup-link">S'inscrire</a></p>
                    </div>
                </form>
            </div>
        </div>
        <!-- FIN PARTIE CONNECTION  -->
    </div>

    <!-- PIED DE PAGE  -->
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
    <script src="js/scriptadmin.js"></script>
</body>

</html>