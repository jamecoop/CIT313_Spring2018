<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

function __autoload($class) {
    include_once('class/'.$class.'.class.php');
}

$newUser = new RegisteredUser('newuser','Regular User');

if(is_object($newUser)) {
    echo "This is an object <br/>";
    echo "The data you entered is: <br/>";
    echo "First Name: $_POST[first_name] <br/>";
    echo "Last Name: $_POST[last_name] <br/>";
    echo "Email: $_POST[email]";
}
else {
    echo "This is not an object";
}








?>