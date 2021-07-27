
<?php
$dsn = "mysql:host=localhost;port=3306;dbname=footballTeam";
$username = "root";
$password = "Arinfo/2021";
$options = [];
$connection = new PDO($dsn, $username, $password, $options);

try {

} catch (PDOExeption $e) {

    print "error :" . $e->getMessage();
    die();
};
