
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device=width,intial-scale=0.1">
    <title>Document</title>
</head>
<body>
    <?php
    $dsn = "mysql:host=localhost;dbname=sign up";
    $username ="root";
    $password ="";
    $option = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];
    try{
        $conn = new PDO($dsn, $username, $password, $option);
        echo "successfully";
    } catch(PDOException $e){ 
        echo "Connection failed: " . $e->getMessage();
    }
    ?>
    </body>
    </html>
