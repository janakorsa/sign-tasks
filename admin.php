<?php
session_start();
if(!isset($_SESSION['id'])){
    header('Location: login.php');
    exit();
}
if($_SESSION['role']==="Admin"){
    echo "hi Admin" .$_SESSION['username'];
}
else
{
    echo "not allowed";
}