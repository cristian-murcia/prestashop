<?php

class AdsenseObj extends ObjectModel {

    public $id_GradiAdsense;
    public $title;
    public $description;
    public $label;
    public $url;
    public $image;
    public $switch;

    /*
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'ps_gradiadsense', 'primary' => 'id_GradiAdsense', 'multilang' => false,
        'fields' => array(
            'id_GradiAdsense' => array('type' => self::TYPE_INT, 'required' => true),
            'title' => array('type' => self::TYPE_STRING, 'required' => true),
            'description' => array('type' => self::TYPE_STRING, 'required' => true),
            'label' => array('type' => self::TYPE_STRING, 'required' => true),
            'url' => array('type' => self::TYPE_STRING, 'required' => true),
            'image' => array('type' => self::TYPE_STRING, 'required' => true),
            'switch' => array('type' => self::TYPE_STRING, 'requiredd' => true)
        )
    );

    //Metodo para traer todos los registros filtrados
    public static function getBanners() {
        $sql = "SELECT * FROM `ps_gradiadsense` WHERE `switch` = 'desabled'";
        $banners = Db::getInstance()->executeS($sql);
        return $banners;
    }

    //Metodo para traer todos los registros de banners
    public static function getAllBanners() {
        $sql = "SELECT * FROM `ps_gradiadsense`";
        $banners = Db::getInstance()->executeS($sql);
        return $banners;
    }

    //Metodo para el cambio de Switch de un banner
    public static function updateSwitchBanner($id_banner, $swicth) {
        if ($swicth == 'enable') {
            $sql = "UPDATE `ps_gradiadsense` SET `switch` = 'desabled' WHERE `ps_gradiadsense`.`id_GradiAdsense` = ". $id_banner.";";
        } else {
            $sql = "UPDATE `ps_gradiadsense` SET `switch` = 'enable' WHERE `ps_gradiadsense`.`id_GradiAdsense` = ". $id_banner.";";
        }
        $update = Db::getInstance()->execute($sql);
        return $update;
    }
    
    //Metodo para borrar un banner
    public static function deleteBanner($id){
        $sql = "DELETE FROM `ps_gradiadsense` WHERE `ps_gradiadsense`.`id_GradiAdsense` = " . $id;
        $delete = Db::getInstance()->execute($sql);
        return $delete;
    }

}
