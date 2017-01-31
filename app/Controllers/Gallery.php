<?php

/** 
* Controller de contact 
* @author Dylan Lecigne & Quentin Helleboid
*/
namespace App\Controllers;

use Core\View;
use Core\Controller;
use Helpers\DB\Entity;
use Helpers\DB\EntityManager;
use Helpers\Session;
use Helpers\Twig;
use Helpers\Url;

class Gallery extends Controller {

	/* Appel de la Construction du parent (Controller) */
    public function __construct() {
        parent::__construct();
    }

    public function index(){

    	$dir = 'app/Templates/Business/Assets/images';
    	$dir_handle = opendir($dir);
    	$images = [];
    	while($entry = readdir($dir_handle)){
    		if(is_file($dir.'/'.$entry)){
    			array_push($images, $dir.'/'.$entry);
    		}
    		
    	}
	
    	$data['images'] = $images;
    	$data['siteurl'] = SITEURL;
        $data['title'] = "Galerie";
        $data['descriptionMeta'] = "Profitez de ces petites photos pour vous représenter au mieux le lieu de votre prochain séjour. ";

        View::renderTemplate('header', $data);
        Twig::render('Gallery/gallery', $data, 'php');
        View::renderTemplate('footer', $data);
    }

    public function viewImage($name){

    }

}


?>