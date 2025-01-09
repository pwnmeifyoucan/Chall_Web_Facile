<?php

$server_name = "db";
$username = "test";
$password = "pass";
$db_name = "data_users";
$table_name = "users";

try {
    $db = new PDO("mysql:host=$server_name;dbname=$db_name", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connexion à bdd faible : " . $e->getMessage();
}

if (isset($_POST['inscrire'])) {   // neu click vao button M'inscrire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $pass = md5($pass);

    $checkEmail = $db->prepare("SELECT * FROM $table_name WHERE email = :email");
    $checkEmail->execute(['email' => $email]);

    if ($checkEmail->rowCount() > 0) {
        echo "Email déjà utilisé. Veuillez utiliser un autre email.";
    } else {
        $req = $db->prepare("INSERT INTO $table_name(nom, prenom, email, pass) VALUES(:nom, :prenom, :email, :pass)");  // req = request
        $req->execute(
            array(
                'nom' => $nom,
                'prenom' => $prenom,
                'email' => $email,
                'pass' => $pass
            )
        );

        if ($req->rowCount() > 0) {
            echo "Inscription réussie";
        } else {
            echo "Échec de l'inscription.";
        }
    }
}