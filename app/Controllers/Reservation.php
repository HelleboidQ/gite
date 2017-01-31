<?php

/** 
* Controller de contact 
* @author Dylan Lecigne & Quentin Helleboid
*/
namespace App\Controllers;

use Core\View;
use Core\Controller;
use Helpers\Url;

class Reservation extends Controller {

	/* Appel de la Construction du parent (Controller) */
    public function __construct() {
        parent::__construct();
    }


    public function index(){
    	$data['siteurl'] = SITEURL;       
        $data['title'] = "A propos";
        $data['descriptionMeta'] = "Ce que vous devez savoir de nous et de notre magnifique lieu de vacances.";



        View::renderTemplate('header', $data);
        View::render('Reservation/reservation', $data);
        View::renderTemplate('footer', $data);
    }
}