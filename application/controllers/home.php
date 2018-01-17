<?php
/**
 * Created by PhpStorm.
 * User: Kamil Kozak
 * Date: 17.01.2018
 * Time: 17:59
 */

class home extends controller{
    public function __call($method, $args){
        if(!is_callable($method)){
            $this->sgException->errorPage(404);
        }
    }

    public function main(){}

    public function index(){
        echo "To jest kontroler home/index!<br />";
    }

    public function produkty(){
        echo "To jest kontroler home/produkty!<br />";
    }
}

?>