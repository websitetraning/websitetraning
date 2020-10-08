<?php
$draiver_host_db="mysql:host=localhost;dbname=traningwebsite";
$user="root";
$password="";
try {
    $conn=new PDO($draiver_host_db,$user,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo"connection failed";
}
?>
