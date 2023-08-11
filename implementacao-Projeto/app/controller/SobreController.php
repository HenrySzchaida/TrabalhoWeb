<?php 
#Classe controller para a Home do sistema
require_once(__DIR__ . "/Controller.php");

class SobreController extends Controller {

    public function __construct() {
        /*if(! $this->usuarioLogado())
            exit;*/
        $this->setActionDefault('sobre',true);
        $this->handleAction();
    }

    protected function sobre() {
        $this->loadView("pages/sobre/sobre.php", [], "", "", true);
    }
}


#Criar objeto da classe
$sobreCont = new SobreController();
