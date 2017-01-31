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
        $data['title'] = "Contact";
        $data['descriptionMeta'] = "Contactez-nous pour plus d'informations concernant la période ou le lieu, afin de mieux vous aiguillez pendant votre séjour.";
    }

    public function sendForm(){

    }
}


?>