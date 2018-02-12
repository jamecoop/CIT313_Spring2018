<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

function __autoload($class) {
    include_once('class/'.$class.'.class.php');
}



$register = new RegisteredUser('saralink','Regular User');
$admin = new Admin('jamecoop','Administrator');

$register->first_name = 'Sara';
$register->last_name = 'Link';
$register->email_address = 'saralink7411@gmail.com';

$admin->first_name = 'James';
$admin->last_name = 'Cooper';
$admin->email_address = 'jamecoop@iupui.edu';


?>

<!DOCTYPE html>
<html>
<head>
    <title>CIT313- Spring 2018 - Intro to Object Oriented Programming</title>
</head>
<body>
<?php
/*
echo "User Level: ". $register->user_level . "<br/>";
echo "Registered User ID: ". $register->user_id ."<br/>";
echo "Registered User Type: ". $register->user_type ."<br/>";
echo "Registered First Name: ". $register->first_name ."<br/>";
echo "Registered Last Name: ". $register->last_name ."<br/>";
echo "Registered Email: ". $register->email_address ."<br/><hr/>";

echo "User Level: ". $admin->user_level . "<br/>";
echo "Admin User ID: ". $admin->user_id ."<br/>";
echo "Admin User Type: ". $admin->user_type ."<br/>";
echo "Admin First Name: ". $admin->first_name ."<br/>";
echo "Admin Last Name: ". $admin->last_name ."<br/>";
echo "Admin Email: ". $admin->email_address ."<br/>";
*/

echo "<br/><hr/>";
$testMath = Admin::math(4,4);
echo "$testMath is my math";
echo "<br/><hr/>";
?>

<form action="results.php" method="post">
    First Name: <input type="text" name="first_name"><br>
    Last Name: <input type="text" name="last_name"><br>
    E-mail: <input type="email" name="email"><br>
    <input type="submit">
</form>

</body>
</html>
