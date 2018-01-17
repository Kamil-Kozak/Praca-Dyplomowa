<?php
/**
 * Created by PhpStorm.
 * User: Kamil Kozak
 * Date: 17.01.2018
 * Time: 15:19
 */

class model{
    public function __get($model)
    {
        $config = registry::register("config");

        $_model = $model.'model';
        $modelfile = $config->model_path.$_model.".php";

        if(!file_exists($modelfile)){
            $modelfile = "core/models/nullmodel.php";
            $_model = "nullmodel";
        }

        include_once($modelfile);

        $modelobj = registry::register($_model);

        return $modelobj;
    }
}

?>