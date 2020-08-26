<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

require_once(dirname(__FILE__) . '/controller/ControllerPrincipal.php');

class consumoRest extends Module {

    public $response;
    protected $config_form = false;

    public function __construct() {
        $this->name = 'consumoRest';
        $this->description = $this->l('Modulo para el consumo de servicios web remotos');
        $this->tab = 'front_office_features';
        $this->version = '1.7.0';
        $this->author = 'Cristian Guzmán';
        $this->need_instance = 0;
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Consumo Rest');
        $this->confirmUninstall = $this->l('¿Realmente quiere desinstalar el modulo?');
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
    }

    public function install() {
        Configuration::updateValue('consumoRest_LIVE_MODE', false);

        return parent::install() &&
                $this->registerHook('displayNav2');
    }

    public function uninstall() {
        Configuration::deleteByName('consumoRest_LIVE_MODE');

        return parent::uninstall();
    }

    //Metodo del la vista consumoRest.tpl
    public function hookDisplayNav2() {
        if (Tools::isSubmit('enviarRegister')) {
            $this->OnSubmitFormRest();
        }

        if (Tools::isSubmit('enviarLogin')) {
            $this->OnSubmitLoginRest();
        }

        $this->context->controller->addCSS($this->_path . 'views/css/frontend.css');
        $this->context->controller->addJQuery(array(
            $this->_path . 'views/js/jquery-3.5.1.min.js'
        ));

        return $this->display(__FILE__, "views/templates/hook/consumoRest.tpl");
    }

    //Metodo de envio de datos de registro al controlador para su solicitud a Api
    public function OnSubmitFormRest() {
        $data = array(
            'name' => Tools::getValue('name'),
            'lastName' => Tools::getValue('lastName'),
            'emailAddress' => Tools::getValue('emailAddress'),
            'jobTitle' => Tools::getValue('jobTitle'),
            'dni' => Tools::getValue('dni'),
            'companyDesc' => Tools::getValue('companyDesc'),
            'fiscalNumber' => Tools::getValue('fiscalNumber'),
            'country' => Tools::getValue('country'),
            'city' => Tools::getValue('city'),
            'cellPhone' => Tools::getValue('cellPhone'),
            'phone' => Tools::getValue('phone'),
            'companyName' => Tools::getValue('companyName')
        );
        $resul = ControllerPrincipal::onSubmit($data);

        if ($resul) {
            $this->context->smarty->assign('estado2', $data['name'] . ' ' . $data['lastName']);
            $this->context->smarty->assign('estado', ' No se encontró el cliente con NIT: ' . $data['fiscalNumber'] . ' Por favor, Comuníquese con el administrador.');
        } else {
            $this->context->smarty->assign('estado2', $data['name'] . ' ' . $data['lastName']);
            $this->context->smarty->assign('estado', 'Ocurrio un error, intente de nuevo.');
        }
    }

    //Metodo de envio de datos de Login al controlador para solicitud de Api
    public function OnSubmitLoginRest() {
        $data = array(
            'emailAddress' => Tools::getValue('emailAddressL'),
            'password' => Tools::getValue('pass'),
        );
        $result = ControllerPrincipal::LoginSubmit($data);
        

        if ($result != 'ERROR') {
            $this->context->smarty->assign('estado2', '¡Error en la solicitud!');
            $this->context->smarty->assign('estado', 'El cliente: ' . $data['emailAddress'].' puede estar inactivo');
        } if ($result == 'NOT_AUTHENTICATED') {
            $this->context->smarty->assign('estado2', '¡Error de autenticación!');
            $this->context->smarty->assign('estado', 'El usuario y la contraseña no son correctos');
        } if ($result == 'AUTHENTICATED') {
            $this->context->smarty->assign('estado2', '¡Autenticado con exito!');
            $this->context->smarty->assign('estado', ' El usuario y la contraseña son correctos');
        } else {
            $this->context->smarty->assign('estado2', $result);
            $this->context->smarty->assign('estado', 'Es necesario comunicarse con el administrador.');
        }
    }

}
