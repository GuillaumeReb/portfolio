<?php

namespace Controller;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use Exception;

class Mail
{
    private $mailClass;
    public function __construct($email, $nom, $objet, $message)
    {
        $mail= new PHPMailer();
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_OFF;                          //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'contact@guillaume-rebourgeon.fr';      //SMTP username
        $mail->Password   = 'Mot de passe a mettre';                            //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port = 465;
        //$mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        $mail->CharSet = 'UTF-8';

        //Recipients
        $mail->setFrom('contact@guillaume-rebourgeon.fr', 'Formulaire de contact de mon Portfolio');
        $mail->addAddress('guillaume.rebourgeon@hotmail.fr', 'Guillaume');     //Add a recipient

        
        $mail->addReplyTo('guillaume.rebourgeon@hotmail.fr', 'Guillaume');

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Formulaire de contact de mon Portfolio';

        $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) : '';
        $nom = isset($_POST['nom']) ? htmlspecialchars(substr($_POST['nom'], 0, 100)) : '';
        $objet = isset($_POST['objet']) ? htmlspecialchars(substr($_POST['objet'], 0, 150)) : '';
        $message = isset($_POST['message']) ? nl2br(htmlspecialchars($_POST['message'], 0, 1000)) : '';

        // Vérification si l'e-mail est valide
        if (!$email) {
            throw new Exception("Adresse e-mail invalide.");
        }

        // Corps du message

        $mail->Body = <<<EOT
            <p><strong>E-mail :</strong> $email</p>
            <p><strong>Nom :</strong> $nom</p>
            <p><strong>Objet :</strong> $objet</p>
            <p><strong>Message:</strong></p>
            <p>$message</p>
            EOT;
                $this->mailClass = $mail;                
    }
    public function send()
    {
        try {
            $resp = $this->mailClass->send();
            return $resp;
        } catch (Exception $e) {
            echo "Erreur lors de l'envoi : {$this->mailClass->ErrorInfo}";
            return false;
        }        

    }
}




?>