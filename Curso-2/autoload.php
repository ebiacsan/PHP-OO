<?php

function load($namespace){
    
    $namespace = str_replace("\\","/",$namespace);
    echo "<pre>";
    echo $caminhoAbsoluto = __DIR__ . DIRECTORY_SEPARATOR . $namespace . ".php";
    echo "</pre>";//die();
    return include_once $caminhoAbsoluto;

}

spl_autoload_register(__NAMESPACE__ . "\load");

?>