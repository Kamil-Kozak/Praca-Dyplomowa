<?php
/**
 * Created by PhpStorm.
 * User: Kamil Kozak
 * Date: 16.01.2018
 * Time: 23:56
 */

class config{
    private $config;

    public function __construct(){
        if(!file_exists("core/config/configs.php")) {
            include_once("../../../core/config/configs.php");
        }
        else{
            include_once("core/config/configs.php");
        }

        if(isset($configs)) $this->config = $configs;
    }

    public function __get($var)
    {
        return $this->config[$var];
    }
}

?>