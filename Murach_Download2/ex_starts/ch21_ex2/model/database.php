<?php
$dsn = 'mysql:host=localhost;dbname=my_guitar_shop2';
$username = 'gg';
$password = 'gwatandai';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    $error = $e->getMessage();
    include('view/error.php');
    exit();
}
?>