<!DOCTYPE html>
<html>
 <link href="css/login.css" rel="stylesheet">
<body>
<div class="login-box">
    <h1>CREA EL TEU PROPI CV</h1>
    <h2>INICIAR SESSIÓ</h2>
    
    <?php
    if(isset($_GET['error'])){
            if($_GET['error']==='contrasenaincorrecta'){
            ?>
            <p class="bad">Contrasenya incorrecta</p>
        <?php } }
        if(isset($_GET['error'])){
            if($_GET['error']==='elusuarionoexiste'){
        ?>
        <p class="bad">Este usuario no existe</p>
    <?php
    } }
    ?>
        
    <form method="POST" action="valida.php">
        
    
    <div class="user-box">
                  
        <input type="text" name="user" required="">
    
        <label for="user" >Usuari</label>
        
    </div>
    <div class="user-box">
        <input type="password" name="passwd" required="">
        <label>Contrasenya</label>  
    </div>
    <div class="button-form">
            
        <button class='buton' type='submit'> Inicia sesió</button>
        
        
        <div id="register">
            No tens una compta?
            <a href="registra.php">Registrar-me</a>
        </div> 
    </div>
          
    </form>
</div>
</body>
</form>
</html>
