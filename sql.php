<?php

require_once ('vendor/autoload.php');

// Récupérer les données du formulaire
$user = $_POST['username'] ?? null;
$pass = $_POST['password'] ?? null;

// Informations de connexion à la base de données
$servername = "database";
$username = "henrique";
$password = "CqIEuocUkTClfJyzVfOYcKAzbrHFqH";
$dbname = "injectionDB";

// Se connecter à la base de données
$db = new mysqli($servername, $username, $password, $dbname);


// Vérifier si les identifiants sont corrects en utilisant les requêtes préparées
$stmt = $db->prepare("SELECT * FROM utilisateurs WHERE user = ? AND password = ?");
$stmt->bind_param("ss", $user, $pass); // 'ss' spécifie que les deux paramètres sont des chaînes (string)
$stmt->execute();
$result = $stmt->get_result();
$result = $result->fetch_all();

// Afficher les utilisateurs si le résultat n'est pas vide
if (count($result) > 0) {
    $sql = "SELECT id, user, password FROM utilisateurs";
    $result = $db->query($sql);
    dump($result->fetch_all());
} else {
    dump('Mauvais identifiants ou mauvais mot de passe !');
}