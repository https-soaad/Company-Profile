<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Inclure les fichiers de la bibliothèque PHPMailer
require 'lib/PHPMailer/src/Exception.php';
require 'lib/PHPMailer/src/PHPMailer.php';
require 'lib/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = isset($_POST['full_name']) ? trim($_POST['full_name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $phoneNumber = isset($_POST['phone_number']) ? trim($_POST['phone_number']) : '';
    $service = isset($_POST['service']) ? trim($_POST['service']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    // Connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "messagedb";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insertion des données dans la base de données
    $stmt = $conn->prepare("INSERT INTO requests (full_name, email, phone_number, service, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $fullName, $email, $phoneNumber, $service, $message);

    if ($stmt->execute()) {
        echo "<script>alert('Demande envoyée avec succès'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Erreur lors de l\'envoi de la demande: " . $stmt->error . "'); window.location.href='index.php';</script>";
    }

    $stmt->close();
    $conn->close();

    // Envoi de l'email avec PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Paramètres SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'user@gmail.com.com'; // Votre adresse Gmail
        $mail->Password   = 'xxx xxx xxx xxx'; // Mot de passe Gmail ou App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Destinataires
        $mail->setFrom('devlopwfs@gmail.com', 'Mailer'); // Adresse de l'expéditeur
        $mail->addAddress('bezsoch@gmail.com'); // Adresse du destinataire

        // Contenu de l'email
        $mail->isHTML(false);
        $mail->Subject = 'Nouvelle Demande de Service';
        $mail->Body    = "Nom Complet: $fullName\nEmail: $email\nNuméro de Téléphone: $phoneNumber\nService: $service\nMessage:\n$message";

        $mail->send();
    } catch (Exception $e) {
        echo "<script>alert('Erreur lors de l\'envoi de l\'email: {$mail->ErrorInfo}');</script>";
    }
}
?>
