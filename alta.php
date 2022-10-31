<?php
require_once 'config.php';
require_once 'database.php';

session_start();


$nom = (isset($_POST['nom'])) ? $_POST['nom'] : "";
$cognom = (isset($_POST['cognom'])) ? $_POST['cognom'] : "";
$email = (isset($_POST['email'])) ? $_POST['email'] : "";
$user = (isset($_POST['user'])) ? $_POST['user'] : "";
$passwd = (isset($_POST['passwd'])) ? $_POST['passwd'] : "";
// ver si algun campo está  vacío
if (empty($nom) || empty($cognom) || empty($email) || empty($user) || empty($passwd)) {
    header("Location: registra.php?error=2");
    exit;
}

$userExisting =  searchUser($conn, $user);

if ($userExisting) {
    header("Location: registra.php?error=alreadyExists");
} else {
    $newUser = createOneUser($conn, $user, $passwd, $nom, $cognom, $email);
    if ($newUser) {
        $_SESSION['usuario'] = $newUser;
        header("Location: cv.php");
    }else{
        header("Location: registra.php?error=problemCreating");
        exit;
    }
}
?>

