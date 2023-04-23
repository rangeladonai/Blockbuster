<?php

include '../sql/connection.php';
include '../class/classe_filme.php';
$filme = new filme_cadastrado();


$filme->setnome_filme($_POST['nome_filme']);
$filme->setgenero_filme($_POST['genero_filme']);
$filme->setimagem_filme($_POST['imagem_filme']);
$filme->setano_filme($_POST['ano_filme']);
$filme->setdiretor_filme($_POST['diretor_filme']);
$filme->setatores_filme($_POST['atores_filme']);
$filme->settempo_filme($_POST['tempo_filme']);
$filme->setnota_filme($_POST['nota_filme']);


//criar o restante dos itens        

$nome_filme = $filme->getnome_filme();
$genero_filme = $filme->getgenero_filme();
$imagem_filme = $filme->getimagem_filme();
$ano_filme = $filme->getano_filme();
$diretor_filme = $filme->getdiretor_filme();
$atores_filme = $filme->getatores_filme();
$tempo_filme = $filme->gettempo_filme();
$nota_filme = $filme->getnota_filme();

if (mysqli_query($con, "insert into buscarfilmes(nome_filme, genero_filme, imagem_filme, ano_filme,diretor_filme,atores_filmes,tempo_filmes,nota_filmes) values( '$nome_filme', '$genero_filme', '$imagem_filme', '$ano_filme',' $diretor_filme','$atores_filme','$tempo_filme','$nota_filme ')")) {
    echo "<script>alert('Inclusão realizada com sucesso');</script>";
    echo "<script>window.location='../?page=cadastrar-filmes'</script>";
} else {

    echo "<script>alert('Houve um erro na inserção');</script>";
    echo "Erro: " . mysqli_error($con);
}

?>

