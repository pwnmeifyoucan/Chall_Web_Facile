<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Inscrire</title>
    <!---Custom CSS File--->
    <link rel="stylesheet" href="./inscrire.css" />
</head>

<body>
    <div class="container">
        <div class="registration form">
            <header>Créer votre Compte</header>
            <form method="POST" action="./traitement_inscrire.php">
                <!-- Nom input field -->
                <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required />

                <!-- Prénom input field -->
                <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prenom" required />

                <!-- Email input field -->
                <input type="email" id="email" name="email" placeholder="Entrez votre email" required />

                <!-- Password input field -->
                <input type="password" id="pass" name="pass" placeholder="Entrez votre mot de passe" required />

                <!-- Signup button -->
                <div class="button-container">
                    <input type="submit" class="button" value="Valider" name="inscrire" />
                </div>
            </form>

            <!-- Login prompt -->
            <div class="signup">
                <span class="signup">Déjà inscrit?
                    <a href="./../index.php">Accès Compte</a>
                </span>
            </div>
        </div>
    </div>
</body>

</html>