<?php

$username = $_POST['username'];
$password = $_POST['password'];



$datos = scandir("./cuentas");
foreach ($datos as $key => $value) {
    if ($value == "$username.txt") {
    $archivoUsuario = file_get_contents("cuentas/$username.txt");
    $arrayArchivo = explode("\n",$archivoUsuario);
    if($arrayArchivo[1]== $password) {
    setcookie('logueado',true,time() + 3600);
    setcookie('username',$username,time() + 3600);
    header('location: index.php');
    } else{
        header('location: account.php?error=loginError'); 
}

}

}



?> 