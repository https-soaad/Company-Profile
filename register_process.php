<?php
/*include('config.php'); // Fichier de configuration pour la connexion à la base de données

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Vérification des mots de passe
    if ($password !== $confirm_password) {
        $_SESSION['error'] = "Les mots de passe ne correspondent pas.";
        header("Location: register.php");
        exit();    }

    // Hashage du mot de passe
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Connexion à la base de données
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Vérification de la connexion
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Vérifier si l'email existe déjà
    $stmt = $conn->prepare("SELECT compte_id FROM compte WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $_SESSION['error'] = "Cet email est déjà utilisé.";
        echo "<p style='color: red;'>Cet email est déjà utilisé.</p>";
        echo "<script>setTimeout(function(){ window.location.href = 'register.php'; }, 2000);</script>";
        exit();
    }

    // Préparation et exécution de la requête
    $stmt = $conn->prepare("INSERT INTO compte (email, mot_de_passe, role) VALUES (?, ?, 'client')");
    $stmt->bind_param("ss", $email, $hashed_password);

    if ($stmt->execute()) {
        echo "Inscription réussie. Vous pouvez maintenant vous connecter.";
        // Rediriger vers la page de connexion
        header("Location: login.php");
        exit();
    } else {
        echo "Erreur: " . $stmt->error;
    }

    // Fermeture de la connexion
    $stmt->close();
    $conn->close();
} else {
    header("Location: register.php");
    exit();
}*/

session_start();
include('config.php'); // Fichier de configuration pour la connexion à la base de données

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Vérification des mots de passe
    if ($password !== $confirm_password) {
        $_SESSION['error'] = "Les mots de passe ne correspondent pas.";
        header("Location: login.php");
        exit();
    }

    // Hashage du mot de passe
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Connexion à la base de données
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Vérification de la connexion
    if ($conn->connect_error) {
        $_SESSION['error'] = "Connection failed: " . $conn->connect_error;
        header("Location: login.php");
        exit();
    }

    // Vérifier si l'email existe déjà
    $stmt = $conn->prepare("SELECT compte_id FROM compte WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $_SESSION['error'] = "Cet email est déjà utilisé.";
        header("Location: login.php");
        exit();
    }

    // Préparation et exécution de la requête
    $stmt = $conn->prepare("INSERT INTO compte (email, mot_de_passe, role) VALUES (?, ?, 'client')");
    $stmt->bind_param("ss", $email, $hashed_password);

    if ($stmt->execute()) {
        $_SESSION['success'] = "Inscription réussie. Vous pouvez maintenant vous connecter.";
        header("Location: login.php");
        exit();
    } else {
        $_SESSION['error'] = "Erreur: " . $stmt->error;
        header("Location: login.php");
        exit();
    }

    // Fermeture de la connexion
    $stmt->close();
    $conn->close();
} else {
    header("Location: login.php");
    exit();
}
?>