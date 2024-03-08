<?php
if(isset($_POST['email']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['age']) && isset($_POST['password']))
{
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $password = $_POST['password'];
    
    echo $email."<br>".$firstname."<br>".$lastname."<br>".$age."<br>".$password."<br>";
    
    


$input = isset($_POST['text']);
// Sanitize Input
$sanitize = filter_var($input, FILTER_SANITIZE_EMAIL);
echo 'Input After Sanitize = ' . $sanitize . '<br>';
 
//Check For The Result

if  (filter_var($sanitize, FILTER_VALIDATE_EMAIL) !== FALSE){
    echo 'valid';
}else{
    echo 'notvalid';
}
 echo ("<br>");
    session_start();
$_session['username']= $firstname.$lastname;
echo "Hi, " .$_session['username'] ."<br>";
}
?>