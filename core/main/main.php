<?php
/**
 * Created by PhpStorm.
 * User: Kamil Kozak
 * Date: 17.01.2018
 * Time: 11:30
 */

class main{
    static public function _templateLoader($controller, $template){
        $config = registry::register("config");
        $templatefile = $config->view_path.$controller."/".$template.".php";

        if(file_exists($templatefile)){
            include_once($templatefile);
        }else{
            $error = registry::register("sgException");
            $error->throwException("Widok ".$template.".php jest niedostępny w lokalizacji ".$config->view_path.$controller);
        }
    }
}


?>