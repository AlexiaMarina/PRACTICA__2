<?php
require_once("alta.php");

$idiomas = SelectIdioma($conn, $_SESSION['usuario']['id_user']);
$habilidad = SelectHabilidad($conn,$_SESSION['usuario']['id_user']);
$informatica = SelectInformatica($conn,$_SESSION['usuario']['id_user']);
$competencia = SelectCompetencia($conn,$_SESSION['usuario']['id_user']);


?>
<!DOCTYPE html>
<html>
<head>
    <title>DADES PERSONALS</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="habilidades.css">
</head>
<body>
    <div class="login-box">
        <h1>CREA EL TEU PROPI CV</h1>
        <h2>Digues les teves habilitats:</h2>
        <form method="POST" action="alta.php">
            <div>
            <h2>IDIOMA:</h2>
            <label for="idiomas" class="tipo_idioma">Afegeix un idioma:</label>
                <select name="idiomas" id="idiomas">
                    <option value="castellano" >Castellà</option>
                    <option value="catalan" >Català</option>
                    <option value="ingles" >Anglés</option>
                    <option value="italiano" >Italià</option>
                    <option value="frances" >Francès</option>
                    <option value="aleman" >Alemany</option>
                    <option value="arabe" >Arab</option>
                    <div class="button-form">
                </select>
                <input type="range" name="porcentaje" class="porcentaje">
                <input type="submit" placeholder="Envia" name= "register3">
            </div>
        </form>
        <form method="POST" action="alta.php">
            <div>
            <h2>HABILITATS:</h2>   
            <div class="user-box" row="col-lg-6">
                <input type="text" name="habilidad" required="">
                <label>Afegeix una habilitat:</label>
            </div>
            <div row="col-lg-6">
            <input  type="range" name="porcentaje" class="porcentaje">
            <input type="submit" placeholder="Envia" name="register4">
            </div>
            </div>
        </form>
        <form method="POST" action="alta.php">
            <div>
            <h2>INFORMATICA:</h2>   
            <div class="user-box">
                <input type="text" name="informatica" required="">
                <label>Afegeix un camp informàtic que dominis:</label>
            </div> 
            <input type="range" name="porcentaje" class="porcentaje">
            <input type="submit" placeholder="Envia" name="register5">
            </div>
        </form>
        <form method="POST" action="alta.php">
            <div>
            <h2>COMPETENCIES:</h2>   
            <div class="user-box">
                <input type="text" name="competencia" required="">
                <label>Afegeix alguna competencia:</label>
            </div>
            <input type="submit" placeholder="Envia" name="register6">
            </div>
        </form>
            <div class="button-form">
                <a  href="cv.php">Anar al Currículum</a>
                <div id="registre">
                    Ja tens un compte?
                    <a href="index.php">Incia sessió</a>
                </div> 
            </div>
        </form>
    </div>
</body>
</html>