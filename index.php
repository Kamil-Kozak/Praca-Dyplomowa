<?php
/**
 * Created by PhpStorm.
 * User: Kamil Kozak
 * Date: 17.01.2018
 * Time: 15:10
 */

ob_start();

require_once("core/init.php");
$router = registry::register("router");
dispatcher::dispatch($router);

ob_end_flush();
?>