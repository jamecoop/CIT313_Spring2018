<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

include_once("class/user.class.php");
include_once("class/registered.user.class.php");
include_once("class/admin.user.class.php");

$admin = new Admin('jamecoop', 'Admin');
$registered = new Registered('saralink', 'Registered User');

$admin->user_type = '2';
$registered->user_type = '1';

echo "User Level: ".$registered->user_level." <br/> Registered User ID: ".$registered->user_id." <br/> 
      Registered User Type: ".$registered->user_type." <br/> Registered First Name: ".$registered->first_name." <br/>
      Registered Last Name: ".$registered->last_name." <br/> Registered Email: ".$registered->email_address." <br/><hr>";

echo "User Level: ".$admin->user_level." <br/> Admin User ID: ".$admin->user_id." <br/> 
      Admin User Type: ".$admin->user_type." <br/> Admin First Name: ".$admin->first_name." <br/>
      Admin Last Name: ".$admin->last_name." <br/> Admin Email: ".$admin->email_address." <br/><hr>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>CIT313- Spring 2018 - Intro to Object Oriented Programming</title>
</head>
<body>

</body>
</html>
