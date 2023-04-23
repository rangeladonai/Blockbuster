<?php
Class filme_cadastrado{
    protected $nome_filme;
    protected $genero_filme;
    protected $imagem_filme; 
    protected $ano_filme;
    protected $diretor_filme; 
    protected $atores_filme;
    protected $tempo_filme; 
    protected $nota_filme;
    
    public function getnome_filme(){
        return $this->nome_filme;
    }
    
    public function setnome_filme($nome_filme){
        $this->nome_filme = $nome_filme;
    }
    
    public function getgenero_filme(){
        return $this->genero_filme;
    }
    
    public function setgenero_filme($genero_filme){
        $this->genero_filme = $genero_filme;
    }


    public function getimagem_filme(){
        return $this->imagem_filme;
    }
    
    public function setimagem_filme($imagem_filme){
        $this->imagem_filme = $imagem_filme;
    }

    public function getano_filme(){
        return $this->ano_filme;
    }
    
    public function setano_filme($ano_filme){
        $this->ano_filme = $ano_filme;
    }

    public function getdiretor_filme(){
        return $this->diretor_filme;
    }
    
    public function setdiretor_filme($diretor_filme){
        $this->diretor_filme = $diretor_filme;
    }

    public function getatores_filme(){
        return $this->atores_filme;
    }
    
    public function setatores_filme($atores_filmes){
        $this->atores_filme = $atores_filmes;
    }

    public function gettempo_filme(){
        return $this->tempo_filme;
    }
    
    public function settempo_filme($tempo_filmes){
        $this->tempo_filme = $tempo_filmes;
    }

    public function getnota_filme(){
        return $this->nota_filme;
    }
    
    public function setnota_filme($nota_filmes){
        $this->nota_filme = $nota_filmes;
    }

    
    
}



?>
