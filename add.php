<a href="2ooDoApp.php">Home</a>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "TooDoApp";

try {
    $task = $_GET['foo'];
    $conn = new PDO ("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO mylist (task)
    VALUES ('$task')";

    $conn->exec($sql);
    echo  "record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql  . $e->getMessage();
    }


?>

