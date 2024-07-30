<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // R�cup�rer les donn�es du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // D�finir l'adresse email du destinataire
    $to = 'votre.email@example.com';  // Remplacez par votre adresse email

    // D�finir l'objet de l'email
    $subject = 'Formulaire de contact';

    // Construire le corps de l'email
    $body = "Nom: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";

    // D�finir les ent�tes de l'email
    $headers = "From: $email";

    // Envoyer l'email
    if (mail($to, $subject, $body, $headers)) {
        echo "Votre message a �t� envoy� avec succ�s.";
    } else {
        echo "�chec de l'envoi du message.";
    }
} else {
    echo "M�thode de requ�te non valide.";
}
?>
