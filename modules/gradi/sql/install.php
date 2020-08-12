<?php

$sql = array();

$sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'GradiAdsense` (
    `id_GradiAdsense` int(11) NOT NULL AUTO_INCREMENT,
`title` varchar(50) not null,
`description` varchar(50) not null,
`label` varchar(50) not null,
`url` varchar(50) not null,
`image` varchar(50) not null,
`switch` varchar(50) not null,
    PRIMARY KEY  (`id_GradiAdsense`)
) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;';

foreach ($sql as $query) {
    if (Db::getInstance()->execute($query) == false) {
        return false;
    }
}
