<!DOCTYPE html>
<html>
<head>
    <title>login Form</title>
    <link rel="stylesheet" herf="styel.css">
<style>
.container {
  width: 50%;
  margin: 0 auto;
}

h1 {
  text-align: center;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
}

.input-box {
  width: 100%;
  padding: 10px;
  margin-top: 5px;
}

.btn {
  background-color: #007bff;
  color: white;
  padding: 10px 20px;
  border: none;
}

.btn:hover {
  background-color: #0056b3;
}
    </style>
    <body> 
        <div class="container">
            <h1>login </h1>

<form id="login-form" method="post">
    <div class="form-group">
      <label for="username">Username:</label>
  <input type="text" class="input-box" placeholder="Your Username" required >
</div>
<div class="form-group">
  <label for="password">Password</label>
  <input type="password" class="input-box" placeholder="Your Password" required>
</div>
<div class="form-group">
<button type="submit" class="btn">login in</button>
</div>
    </form>
</div>
</body>
</html>
<?php
require_once 'config.php';
if(isset($_POST['username']) && isset($_POST['password'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
  
    $sql="SELECT FROM user WHERE username=:uname AND password=:pass";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array( 
        ':uname'=>$username,
        ':pass'=>$password
    ));
    $user=$stmt->fetch(PDO::FETCH_ASSOC);
    if($user){
        $_SESSION['id']=$user['id'];
        $_SESSION['username']=$user['username'];
        $_SESSION['role']=$user['role'];
        header("Location:profile.php");
    }
}
?>