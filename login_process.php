<?php
session_start();
include('config.php'); // Fichier de configuration pour la connexion à la base de données

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Vérification spécifique pour un compte administrateur
    if ($email === "ezzahrifatimaezzahra@gmail.com" && $password === "admin") {
        // Rediriger vers le tableau de bord de l'administrateur
        header("Location: admin.php");
        exit();
    }

    // Connexion à la base de données
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Vérification de la connexion
    if ($conn->connect_error) {
        $_SESSION['error'] = "Connection failed: " . $conn->connect_error;
        header("Location: login.php");
        exit();
    }

    // Préparation et exécution de la requête pour vérifier les informations de connexion
    $stmt = $conn->prepare("SELECT compte_id, mot_de_passe, role FROM compte WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($compte_id, $hashed_password, $role);
        $stmt->fetch();

        // Vérification du mot de passe
        if (password_verify($password, $hashed_password)) {
            // Stocker les informations de l'utilisateur dans la session
            $_SESSION['compte_id'] = $compte_id;
            $_SESSION['email'] = $email;
            $_SESSION['role'] = $role;

            // Vérification si c'est un compte administrateur
            if ($role == 'admin') {
                header("Location: admin_dashboard.php"); // Rediriger vers le tableau de bord de l'administrateur
            } else {
                header("Location: index.php"); // Rediriger vers la page principale pour les clients
            }
            exit();
        } else {
            $_SESSION['error'] = "Mot de passe incorrect.";
            header("Location: login.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "Aucun compte trouvé avec cet email.";
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
/*
session_start();
include('config.php'); // Fichier de configuration pour la connexion à la base de données

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Vérification spécifique pour un compte administrateur
    if ($email === "ezzahrifatimaezzahra@gmail.com" && $password === "admin") {
        // Rediriger vers le tableau de bord de l'administrateur
        header("Location: admin_dashboard.php");
        exit();
    }

    // Connexion à la base de données
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Vérification de la connexion
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Préparation et exécution de la requête pour vérifier les informations de connexion
    $stmt = $conn->prepare("SELECT compte_id, mot_de_passe, role FROM compte WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($compte_id, $hashed_password, $role);
        $stmt->fetch();

        // Vérification du mot de passe
        if (password_verify($password, $hashed_password)) {
            // Stocker les informations de l'utilisateur dans la session
            $_SESSION['compte_id'] = $compte_id;
            $_SESSION['email'] = $email;
            $_SESSION['role'] = $role;

            // Vérification si c'est un compte administrateur
            if ($role == 'admin') {
                header("Location: admin_dashboard.php"); // Rediriger vers le tableau de bord de l'administrateur
            } else {
                header("Location: index.php"); // Rediriger vers la page principale pour les clients
            }
            exit();
        } else {
            $_SESSION['error'] = "Mot de passe incorrect.";
            header("Location: login.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "Aucun compte trouvé avec cet email.";
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
*/
?>