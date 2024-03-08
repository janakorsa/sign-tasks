<!DOCTYPE html>
<html>
<head>
    <title> Sign Up Form</title>
    <link rel="stylesheet" herf="styel.css">
    <style>
.container {
  width: 40%;
  margin: 0 auto;
  padding: 20px;
}

.form-group {
  margin-bottom: 20px;
}

.input-box {
  width: 40%;
  padding: 10px;
}

.btn {
  background-color: #007bff;
  color: #fff;
  padding: 10px 20px;
  border: none;
}
    </style>
</head>
<body>
    <div class="container">
        <h1>  Sign Up</h1>
   <form>
    <div class="form-group">
      <label for="username">Username:</label>
  <input type="text" class="input-box" placeholder="Your Username" required >
</div>
<div class="form-group">
  <label for="password">Password</label>
  <input type="password" class="input-box" placeholder="Your Password" required>
</div>
<div class="form-group">
<button type="submit" class="btn">Sign Up</button>
</div>
    </form>
</div>
</body>
</html>
<?php 
require_once 'config.php';
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "INSERT INTO username (username, password) VALUES (:jana, :pass)";
    $stmt->execute(array(':uname' => $username, ':pass' => $password));
    if($stmt)
    echo "Registration successful!...";
}
?>