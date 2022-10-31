<?php

$host="mysql-alexia.alwaysdata.net";
$user="alexia";
$passwd ="MarinaAlexia2317";
$dbname = "alexia_marina";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $passwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "La connexió ha fallat: " . $e->getMessage();
}

?>