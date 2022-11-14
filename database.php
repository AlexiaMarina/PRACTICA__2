<?php

require_once("config.php");


function searchUser($conn, $user)
{
	$query = "SELECT * FROM usuari WHERE user = '$user'";
    $result = $conn->query($query);
    return $result->fetch();
}



<<<<<<< HEAD
function createOneUser($conn, $user, $password, $nom, $cognom, $email, $direcció, $telefon_fix, $data_naixement, $nacionalitat, $telefon_movil, $estat_civil, $carnet_cotxe )
{
    $passwordHashed = hashPassword($password);
    $query = "INSERT INTO usuari (user, passwd, nom, cognom, email, direcció, telefon_fix, data_naixement, nacionalitat, telefon_movil, estat_civil, carnet_cotxe) VALUES ('$user', '$passwordHashed', '$nom', '$cognom', '$email','$direcció', '$telefon_fix', '$data_naixement', '$nacionalitat', '$telefon_movil', '$estat_civil', '$carnet_cotxe' )";
=======
function createOneUser($conn, $user, $password, $nom, $cognom, $email, $direccio, $telefon_fix, $data_naixement, $nacionalitat, $telefon_movil, $estat_civil, $carnet_cotxe)
{
    $passwordHashed = hashPassword($password);
    $query = "INSERT INTO usuari (user, passwd, nom, cognom, email, direccio, telefon_fix, data_naixement, nacionalitat, telefon_movil, estat_civil, carnet_cotxe ) VALUES ('$user', '$passwordHashed', '$nom', '$cognom', '$email', '$direccio', '$telefon_fix', '$data_naixement', '$nacionalitat', '$telefon_movil', '$estat_civil', '$carnet_cotxe')";
>>>>>>> 1428174116d66172b5aee3909cb81f40047b01af
    $result = $conn->query($query);
    if ($result) {
        return searchUser($conn, $user);
    }
    return false;
}

<<<<<<< HEAD






=======
>>>>>>> 1428174116d66172b5aee3909cb81f40047b01af
function hashPassword($password)
{
    return password_hash($password, PASSWORD_DEFAULT);
}
function verifyPassword($password, $hash)
{
    return password_verify($password, $hash);
}

function SelectIdioma($conn, $id_user)
{
	$query = "SELECT * FROM idiomas WHERE id_user = '$id_user'";
    $result = $conn->query($query);
    return $result->fetchAll();
}
function createOneIdioma($conn,$tipo_idioma,$id_user,$porcentaje)
{
    $query = "INSERT INTO idiomas (tipo_idioma, id_user, porcentaje) VALUES ('$tipo_idioma','$id_user', '$porcentaje')";
    $result = $conn->query($query);
    if ($result) {
        return searchUser($conn, $id_user);
    }
    return false;
}
function SelectHabilidad($conn, $id_user)
{
	$query = "SELECT * FROM habilidades WHERE id_user = '$id_user'";
    $result = $conn->query($query);
    return $result->fetchAll();
}
function createOneHabilidad($conn,$habilidad,$id_user,$porcentaje)
{
    $query = "INSERT INTO habilidades (habilidad, id_user, porcentaje) VALUES ('$habilidad','$id_user', '$porcentaje')";
    $result = $conn->query($query);
    if ($result) {
        return searchUser($conn, $id_user);
    }
    return false;
}
function SelectInformatica($conn, $id_user)
{
	$query = "SELECT * FROM informaticas WHERE id_user = '$id_user'";
    $result = $conn->query($query);
    return $result->fetchAll();
}
function createOneInformatica($conn,$informatica,$id_user,$porcentaje)
{
    $query = "INSERT INTO informaticas (informatica, id_user, porcentaje) VALUES ('$informatica','$id_user', '$porcentaje')";
    $result = $conn->query($query);
    if ($result) {
        return searchUser($conn, $id_user);
    }
    return false;
}
function SelectCompetencia($conn, $id_user)
{
	$query = "SELECT * FROM competencies WHERE id_user = '$id_user'";
    $result = $conn->query($query);
    return $result->fetchAll();
}
function createOneCompetencia($conn,$competencia,$id_user)
{
    $query = "INSERT INTO competencies (competencia, id_user) VALUES ('$competencia','$id_user')";
    $result = $conn->query($query);
    if ($result) {
        return searchUser($conn, $id_user);
    }
    return false;
}



?>


