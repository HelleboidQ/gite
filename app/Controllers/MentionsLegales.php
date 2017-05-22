<?php

/** 
* Controller de contact 
* @author Dylan Lecigne & Quentin Helleboid
*/
namespace App\Controllers;

use Core\View;
use Core\Controller;
use Helpers\Url;

class MentionsLegales extends Controller {

	/* Appel de la Construction du parent (Controller) */
    public function __construct() {
        parent::__construct();
    }


    public function index(){
    	/* A voir avec les templates*/

    	$data['siteurl'] = SITEURL;       
        $data['title'] = "Mentions l&eacute;gales";
        $data['descriptionMeta'] = "Page des mentions l&eacute;gales du site du gite de langlebert.";



        View::renderTemplate('header', $data);
        View::render('MentionsLegales/mentionsLegales', $data);
        View::renderTemplate('footer', $data);
    }

}


?>