<?php

/** 
* Controller de contact 
* @author Dylan Lecigne & Quentin Helleboid
*/
namespace App\Controllers;

use Core\View;
use Core\Controller;
use Helpers\Url;

class Contact extends Controller {

	/* Appel de la Construction du parent (Controller) */
    public function __construct() {
        parent::__construct();
    }


    public function index(){
    	/* A voir avec les templates*/

    	$data['siteurl'] = SITEURL;       
        $data['title'] = "Contactez-nous!";
        $data['descriptionMeta'] = "Contactez-nous pour plus d'informations concernant la période ou le lieu, afin de mieux vous aiguillez pendant votre séjour.";



        View::renderTemplate('header', $data);
        View::render('Contact/contact', $data);
        View::renderTemplate('footer', $data);
    }

    public function sendForm(){

        if (isset($_POST["envoyer"])) {
            ini_set('SMTP', 'localhost');
            ini_set('smtp_port', 25);

            $nom = $_POST['nom'];
            $mail = $_POST['mail'];
            $objet = "Contact";
            $message = $_POST['message'];

/////voici la version Mine
            $headers = "MIME-Version: 1.0\r\n";

//////ici on détermine le mail en format text
            $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";

////ici on détermine l'expediteur et l'adresse de réponse
            $headers .= "From: $nom <$mail>\r\nReply-to : $nom <$mail>\nX-Mailer:PHP";

            $subject = "$objet";
            $destinataire = "quentin.helleboid@gmail.com";
            $body = "$message";
            if (mail($destinataire, $subject, $body, $headers)) {
                echo "Votre mail a été envoyé<br>";
            } else {
                echo "Une erreur s'est produite";
            }
        }

        $data['title'] = "Contactez-nous!";
        $data['descriptionMeta'] = "Contactez-nous pour plus d'informations concernant la période ou le lieu, afin de mieux vous aiguillez pendant votre séjour.";

        Url::redirect('index');
    }
}


?>