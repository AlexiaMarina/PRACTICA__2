<!DOCTYPE html>
<html>


<head>
    <title>Registrar usuario</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
    <div class="login-box">
        <h1>CREA EL TEU PROPI CV</h1>
        <h2>Registra't:</h2>
        <div class="alerta">
            <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "alreadyExists") {

                ?>
                <p class="bad">Este usuario ya existe</p>
                <?php } 

                if ($_GET['error'] == "problemCreating") {
                ?>
                    <p class="bad">Este usuario no se ha podido registrar</p>
                <?php
                } }
            ?>
        </div>
        <form method="POST" action="alta.php">
            <div class="user-box">
                <input type="text" name="nom" required="">
                <label>Nom</label>
            </div>
            <div class="user-box">
                <input type="text" name="cognom" required="">
                <label>Cognom</label>
            </div>
            <div class="user-box">
                <input type="text" name="email" required>
                <label>Correu electrònic</label>
            </div>
            <div class="user-box">
                <input type="text" name="user" required="">
                <label>Usuari</label>
            </div>
            <div class="user-box">
                <input type="password" name="passwd" required="">
                <label>Contrasenya</label>
            </div>
            <div class="button-form">
                <input type="submit" placeholder="registrar-me" name="register">

                <div id="register">
                    Ja tens un compte?
                    <a href="index.php">Incia sessió</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>