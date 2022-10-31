
<?php
require_once 'config.php';
require_once 'database.php';


$user = (isset($_POST['user'])) ? $_POST['user'] : "";
$password = (isset($_POST['passwd'])) ? $_POST['passwd'] : "";



$userExisting =  searchUser($conn, $user);
    if (!$userExisting) {
        
        header("Location:index.php?error=elusuarionoexiste");
    }
    else{
        $passwordHashed = $userExisting['passwd'];
        $passwordCorrect = password_verify($password, $passwordHashed);
        // 
        if ($passwordCorrect) {
            session_start();
            $_SESSION['usuario'] = $userExisting;
            header("Location:cv.php");
        }
        else{
            header("Location:index.php?error=contrasenaincorrecta");
        }
    

    }







