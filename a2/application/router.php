<?php

function myLoad($class) {

    if(file_exists('application/models/'.$class.'.class.php')) {
        require_once('application/models/'.$class.'.class.php');
    }

    if(file_exists('application/controllers/'.$class.'.class.php')) {
        require_once('application/controllers/'.$class.'.class.php');
    }

    if(file_exists('application/'.$class.'.class.php')) {
        require_once('application/'.$class.'.class.php');
    }

}

spl_autoload_register('myLoad');

// require_once 'application/load.class.php';
// require_once 'application/model.class.php';
// require_once 'application/controller.class.php';

    new Controller();

?>

