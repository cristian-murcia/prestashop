<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

require_once(dirname(__FILE__) . '/classes/AdsenseObj.php');

class Gradi extends Module {

    protected $config_form = false;

    public function __construct() {
        $this->name = 'gradi';
        $this->description = $this->l('Modulo para la creación de banners');
        $this->tab = 'front_office_features';
        $this->version = '1.7.0';
        $this->author = 'Cristian Guzmán';
        $this->need_instance = 0;
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Gradi');
        $this->confirmUninstall = $this->l('¿Realmente quiere desinstalar el modulo?');
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
    }

    public function install() {
        Configuration::updateValue('GRADI_LIVE_MODE', false);

        include(dirname(__FILE__) . '/sql/install.php');

        return parent::install() &&
                $this->registerHook('displayHome');
    }

    public function uninstall() {
        Configuration::deleteByName('GRADI_LIVE_MODE');

        include(dirname(__FILE__) . '/sql/uninstall.php');

        return parent::uninstall();
    }

    public function getContent() {

        $this->saveBanner();
        $this->getAllBanners();
        $this->updateBanner();
        $this->deleteBanner();

        return $this->display(__FILE__, "getContent.tpl");
    }

    public function saveBanner() {
        if (Tools::isSubmit('enviar')) {
            if (isset($_FILES['imagen'])) {
                $imagen = $_FILES['imagen'];
                if ($imagen['name'] != "") {
                    $allowed = array('image/gif', 'image/jpeg', 'image/jpg', 'image/png');
                    if (in_array($imagen['type'], $allowed)) {
                        $path = '../upload/';
                        $copy = ImageManager::resize($imagen['tmp_name'], $path . time() . $imagen['name']);
                        if ($copy) {
                            $id_GradiAdsense = 0;
                            $title = Tools::getValue('title');
                            $description = Tools::getValue('description');
                            $label = Tools::getValue('label');
                            $url = Tools::getValue('url');
                            $imagePath = $path . time() . $imagen['name'];
                            $switch = "desable";

                            $result = Db::getInstance()->query("INSERT INTO `ps_gradiadsense` (`id_GradiAdsense`, `title`, `description`, `label`, `url`, `image`, `switch`)"
                                    . " VALUES (NULL, '" . $title . "', '" . $description . "', '" . $label . "', '" . $url . "', '" . $imagePath . "', 'desabled');");

                            if ($result) {
                                $this->context->smarty->assign('savedForm', 'EL banner ha sido guardado');
                            } else {
                                $this->context->smarty->assign('savedForm', 'No se ha guardado el banner :(');
                            }
                        } else {
                            $this->context->smarty->assign('errorForm', 'Error al guardar la imagen: ' . $path . $imagen['name']);
                        }
                    } else {
                        $this->context->smarty->assign('errorForm', '¡Hey! La imagen es de formato invalido');
                    }
                } else {
                    $this->context->smarty->assign('errorForm', '¡Hey! La imagen es de formato invalido');
                }
            } else {
                $this->context->smarty->assign('errorForm', '¡Hey! La imagen es requerida');
            }
        }
    }

    //Metodo que retorna todos los banners
    public function getAllBanners() {
        $allBanners = AdsenseObj::getAllBanners();

        $this->context->smarty->assign('allBanners', $allBanners);
    }

    //Metodo para cambiar la visivilidad del banner
    public function updateBanner() {
        if (Tools::isSubmit('updateBanner')) {
            $id_banner = Tools::getValue('id_gradi');
            $switch = Tools::getValue('swicth_g');
            $updateBanner = AdsenseObj::updateSwitchBanner($id_banner, $switch);
            if ($updateBanner) {
                $this->context->smarty->assign('statusPos', 'Se ha modificado el banner');
            } else {
                $this->context->smarty->assign('statusNeg', 'No se ha podido modificar');
            }
        }
    }
    
    //metodo para borrar un banner
    public function deleteBanner(){
        if (Tools::isSubmit('borrarBanner')){
            $id_banner = Tools::getValue('id_gradi');
            $delete = AdsenseObj::deleteBanner($id_banner);
            if ($delete){
                $this->context->smarty->assign('statusPos', 'Se ha borrado el banner');
            } else {
                $this->context->smarty->assign('statusNeg', 'No se ha podido borrar el banner');
            }
        }
    }

    public function hookDisplayHome($params) {
        $banners = AdsenseObj::getBanners();
        $this->context->smarty->assign('banners', $banners);

        $this->context->controller->addCSS($this->_path.'views/css/frontend.css', 'all');
        $this->context->controller->addJQuery(array(
            $this->_path . 'views/js/jquery-3.5.1.min.js'
        ));
        return $this->display(__FILE__, "displayHome.tpl");
    }

}
