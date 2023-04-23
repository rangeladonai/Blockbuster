<?php

function insert(){
    require './sql/connection.php';
    require_once './model/usuarioClass.php';
    
    //set
    $usuario = new Usuario();
    $usuario->setUsername($_POST['username']);
    $usuario->setSenha($_POST['password']);
    $usuario->setCep($_POST['endereco_cep']);
    $usuario->setRua($_POST['endereco_rua']);
    $usuario->setBairro($_POST['endereco_bairro']);
    $usuario->separaCidadeUF($_POST['endereco_cidade_estado']);
    
    //get
    $username = $usuario->getUsername();
    $senha = $usuario->getSenha();
    $cep =$usuario->getCep();
    $rua = $usuario->getRua();
    $bairro = $usuario->getBairro();
    $cidade = $usuario->getCidade();
    $estado = $usuario->getEstado();
    
    $sql = "INSERT INTO usuario(username, senha, cep, rua, bairro, cidade, estado) VALUES('$username','$senha','$cep','$rua','$bairro','$cidade','$estado')";

    if ($con->query($sql)){
        echo "<script> window.location='index.php?usercadastrado'</script>";
    }
}