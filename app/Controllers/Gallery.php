<?php

/** 
* Controller de contact 
* @author Dylan Lecigne & Quentin Helleboid
*/
namespace App\Controllers;



class Gallery extends Controllers{

	/* Appel de la Construction du parent (Controller) */
    public function __construct() {
        parent::__construct();
    }

    public function index(){

    	$data['siteurl'] = SITEURL;
        $data['title'] = "Galerie";
        $data['descriptionMeta'] = "Profitez de ces petites photos pour vous représenter au mieux le lieu de votre prochain séjour. ";
    }

}


?>