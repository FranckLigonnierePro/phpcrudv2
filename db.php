
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$dsn = "mysql:host=localhost;port=3306;dbname=footballTeam";
$username = "root";
$password = "Arinfo/2021";
$options = [];
$connection = new PDO($dsn, $username, $password, $options);

try {
    print "connexion reussie";
} catch (PDOExeption $e) {

    print "error :" . $e->getMessage();
    die();
};