<?php
/**
 * Created by PhpStorm.
 * User: Kamil Kozak
 * Date: 16.01.2018
 * Time: 19:30
 */

if(!defined('DS')) define('DS', '/');

$AbsoluteURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://';
$AbsoluteURL .= $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
$slash = substr($AbsoluteURL, -1);
$NewURL = $slash != '/' ? $AbsoluteURL.'/' : $AbsoluteURL;

define('SERVER_ADDRESS', $NewURL);

/**
 * USTAWIENIA JĘZYKOWE
 */

$configs['default_session_var'] = 'lang';
$configs['default_lang'] = 'pl';

/**
 * USTAWIENIA SYSTEMU - PODSTAWOWE
 */

$configs['default_controller'] = "home";
/**
 * USTAWIENIA SYSTEMU - ŚCIEŻKI KATALOGÓW
 */

$configs['images_catalog_name'] = 'images';
$configs['javascript_catalog_name'] = 'js';
$configs['stylesheet_catalog_name'] = 'css';
$configs['fonts_catalog_name'] = 'fonts';

$configs['controller_path'] = "application".DS."controllers".DS;
$configs['model_path'] = "application".DS."models".DS;
$configs['view_path'] = "application".DS."views".DS;
$configs['media_path'] = "application".DS."media".DS;
$configs['module_path'] = "application".DS."library".DS;

$configs['app_images_path'] = "application".DS."media".DS.$configs['images_catalog_name'].DS;
$configs['app_javascript_path'] = "application".DS."media".DS.$configs['javascript_catalog_name'].DS;
$configs['app_stylesheet_path'] = "application".DS."media".DS.$configs['stylesheet_catalog_name'].DS;
$configs['app_fonts_path'] = "application".DS."media".DS.$configs['fonts_catalog_name'].DS;

$configs['helper_path'] = "core".DS."helpers".DS;
$configs['library_path'] = "core".DS."library".DS;
$configs['driver_path'] = "core".DS."drivers".DS;

/**
 * USTAWIENIA SYSTEMU - BAZA DANYCH
 */

$configs['db_host'] = "localhost";
$configs['db_user'] = "root";
$configs['db_pass'] = "";
$configs['db_name'] = "praca_cms";
?>