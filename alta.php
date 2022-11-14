<?php
require_once 'config.php';
require_once 'database.php';

session_start();


$nom = (isset($_POST['nom'])) ? $_POST['nom'] : "";
$cognom = (isset($_POST['cognom'])) ? $_POST['cognom'] : "";
$email = (isset($_POST['email'])) ? $_POST['email'] : "";
$user = (isset($_POST['user'])) ? $_POST['user'] : "";
$passwd = (isset($_POST['passwd'])) ? $_POST['passwd'] : "";

$direccio = (isset($_POST['direccio'])) ? $_POST['direccio'] : "";
$telefon_fix = (isset($_POST['telefon_fix'])) ? $_POST['telefon_fix'] : "";
$data_naixement = (isset($_POST['data_naixement'])) ? $_POST['data_naixement'] : "";
$nacionalitat = (isset($_POST['nacionalitat'])) ? $_POST['nacionalitat'] : "";
$telefon_movil = (isset($_POST['telefon_movil'])) ? $_POST['telefon_movil'] : "";
$estat_civil = (isset($_POST['estat_civil'])) ? $_POST['estat_civil'] : "";
$carnet_cotxe = (isset($_POST['carnet_cotxe'])) ? $_POST['carnet_cotxe'] : "";

$idiomas = (isset($_POST['idiomas'])) ? $_POST['idiomas'] : "";
$tipo_idioma = (isset($_POST['tipo_idioma'])) ? $_POST['tipo_idioma'] : "";

$habilidad = (isset($_POST['habilidad'])) ? $_POST['habilidad'] : "";

$informatica = (isset($_POST['informatica'])) ? $_POST['informatica'] : "";

$competencia = (isset($_POST['competencia'])) ? $_POST['competencia'] : "";


// ver si algun campo está  vacío
if (isset($_POST['register'])){
        if (empty($nom) || empty($cognom) || empty($email) || empty($user) || empty($passwd)) {
            header("Location: registra.php?error=2");
            exit;
        }
        else{
            $userExisting =  searchUser($conn, $user);

            if ($userExisting) {
                header("Location: registra.php?error=alreadyExists");
            }

            $register_1= [$nom,$cognom,$email,$user,$passwd];
            $_SESSION['register']=$register_1;
            header("location: r_dades_personals.php");
        }
    }
    if (isset($_POST['register2'])){
        if ( empty($direccio) || empty($telefon_fix) || empty($data_naixement) || empty($nacionalitat) || empty($telefon_movil)|| empty($estat_civil)|| empty($carnet_cotxe)) {
            header("Location: r_dades_personals.php?error=2");
            exit;
        }
        else{
            $user=$_SESSION['register'][3];
            $cognom=$_SESSION['register'][1];
            $email=$_SESSION['register'][2];
            $passwd=$_SESSION['register'][4];
            $nom=$_SESSION['register'][0];
            $newUser = createOneUser($conn, $user, $passwd, $nom, $cognom, $email, $direccio, $telefon_fix, $data_naixement, $nacionalitat, $telefon_movil, $estat_civil, $carnet_cotxe);
            $_SESSION['usuario']=$newUser;
            $_SESSION['usuario']['id_user']=$newUser['id_user'];
            header("Location: habilidades.php");
        }
        exit;
    }
    if (isset($_POST['register3'])){
        if ( empty($idiomas) ) {
            header("Location: habilidades.php?error=2");
            exit;
        }
        else{
            $idiomas = $_POST['idiomas'];
            $porcentaje = $_POST['porcentaje'];

            $habilidad=$_POST['habilidad'];
            $porcentaje =$_POST ['porcentaje'];

            $id_user=$_SESSION['usuario']['id_user'];

            $NewIdioma = createOneIdioma($conn, $idiomas, $id_user,$porcentaje);
            
            header("Location: habilidades.php");
        }
        exit;
    }
    if (isset($_POST['register4'])){
        if ( empty($habilidad) ) {
            header("Location: habilidades.php?error=2");
            exit;
        }
        else{

            $habilidad=$_POST['habilidad'];
            $porcentaje =$_POST ['porcentaje'];
            $id_user=$_SESSION['usuario']['id_user'];
            $NewHabilidad = createOneHabilidad($conn, $habilidad, $id_user,$porcentaje);

            header("Location: habilidades.php");
        }
        exit;
    }
    if (isset($_POST['register5'])){
        if ( empty($informatica) ) {
            header("Location: habilidades.php?error=2");
            exit;
        }
        else{

            $informatica=$_POST['informatica'];
            $porcentaje =$_POST ['porcentaje'];
            $id_user=$_SESSION['usuario']['id_user'];
            $NewInformatica = createOneInformatica($conn, $informatica, $id_user,$porcentaje);

            header("Location: habilidades.php");
        }
        exit;
    }
    if (isset($_POST['register6'])){
        if ( empty($competencia) ) {
            header("Location: habilidades.php?error=2");
            exit;
        }
        else{

            $competencia=$_POST['competencia'];
            $id_user=$_SESSION['usuario']['id_user'];
            $NewCompetencia = createOneCompetencia($conn, $competencia, $id_user);

            header("Location: habilidades.php");
        }
        exit;
    }




?>

