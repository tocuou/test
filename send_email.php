<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Définir l'adresse email du destinataire
    $to = 'votre.email@example.com';  // Remplacez par votre adresse email

    // Définir l'objet de l'email
    $subject = 'Formulaire de contact';

    // Construire le corps de l'email
    $body = "Nom: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";

    // Définir les entêtes de l'email
    $headers = "From: $email";

    // Envoyer l'email
    if (mail($to, $subject, $body, $headers)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Échec de l'envoi du message.";
    }
} else {
    echo "Méthode de requête non valide.";
}
?>
