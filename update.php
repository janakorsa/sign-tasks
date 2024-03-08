<?php
session_start();
if(!isset($_SESSION['id'])){
    header('Location: login.php');
    exit();
}
else{
    if(isset($_GET['nwename'])){ 
$newname=$_GET['newname'];
require_once 'config.php';
$sql="UPDATE user SET username=:new WHERE id=:id";
$stmt=$conn->prepare($sql);
$stmt->execute(array(
    ':new'=>$newname,
    ':id'=>$_SESSION['id']
));
if($stmt){
    echo "successfully changed";
}


    }
}
?>