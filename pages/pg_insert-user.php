<?php
if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['endereco_cep'])){
    require './model/usuarioModel.php';
    insert();
}