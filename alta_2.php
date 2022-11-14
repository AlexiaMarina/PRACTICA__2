<?php
require_once 'config.php';
require_once 'database.php';

session_start();


$direcció = (isset($_POST['direcció'])) ? $_POST['direcció'] : "";
$telefon_fix = (isset($_POST['telefon_fix'])) ? $_POST['telefon_fix'] : "";
$data_naixement = (isset($_POST['data_naixement'])) ? $_POST['data_naixement'] : "";
$nacionalitat = (isset($_POST['nacionalitat'])) ? $_POST['nacionalitat'] : "";
$telefon_movil = (isset($_POST['telefon_movil'])) ? $_POST['telefon_movil'] : "";
$estat_civil = (isset($_POST['estat_civil'])) ? $_POST['estat_civil'] : "";
$carnet_cotxe = (isset($_POST['carnet_cotxe'])) ? $_POST['carnet_cotxe'] : "";


// ver si algun campo está  vacío
if (empty($direcció) || empty($telefon_fix) || empty($data_naixement) || empty($nacionalitat) || empty($telefon_movil)|| empty($estat_civil)|| empty($carnet_cotxe)) {
    header("Location: r_dades_personals.php?error=2");
    exit;
}

$userExisting =  searchUser($conn, $user);

if ($userExisting) {
    header("Location: registra.php?error=alreadyExists"); }

 else {
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