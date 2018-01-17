<?php
/**
 * Created by PhpStorm.
 * User: Kamil Kozak
 * Date: 18.01.2018
 * Time: 00:22
 */

if(!isset($_SESSION)) session_start();

echo "Obsługa błędów<br />";

echo "<pre>";
print_r($_SESSION);
echo "</pre><br /><hr /><br />";

if(isset($_SESSION['debug'])){
    echo base64_decode($_SESSION['debug']);
}

?>