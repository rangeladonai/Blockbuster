<?php
//CHAMADOR DE FUNÇÃO, SE QUISER CRIAR UMA FUNÇÃO NESTE ARQUIVO. NAO ALTERE O CODIGO ABAIXO
session_start();
$action = $_GET['action'];
if (function_exists($action)){
    call_user_func($action);
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function verificaLogin(){
    require '../sql/connection.php';
    $username = $_POST['username'];
    $passwrd = $_POST['password'];
    
    $sql = "SELECT username, senha FROM usuario WHERE username = '$username' AND senha = '$passwrd'";
    
    $consulta = $pdo->prepare($sql);
    $consulta->execute();
    
    if ($consulta->rowCount()){
        while ($row = $consulta->fetch(PDO::FETCH_ASSOC)){
            if ($username == $row['username'] && $passwrd == $row['senha']){
                $_SESSION['usuario'] = $row['username'];
                echo "<script> window.location='../index.php'</script>";
            }
        }
    } else {
        echo "<script> window.location='../index.php?erro=1'</script>";
    }
}

function deslogar(){
    if (isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])){
        unset($_SESSION['usuario']);
        $GLOBALS['usuarioLogado'] = false;
        echo "<script> window.location='../index.php'</script>";
    } else {
        echo "<script> window.location='../index.php'</script>";
    }
}