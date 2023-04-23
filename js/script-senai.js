$(function () {

  //Usar a API do ViaCep
  //Url: https://viacep.com.br/
  $(document).on('keyup change', '#signup-content [name="endereco_cep"]', function (e) {
    var _this = this,
      cep_value = _this.value.replace(/\D/g, '');

    if (cep_value.length == 8) {
      console.dir('Consultar CEP: ' + cep_value);

    }
  });

  $(document).on('click', '.buscar-filme-omdb_btn', function (e) {
    var _this = this,
      _inpt_filme = document.querySelector('.buscar-filme-omdb_inpt'),
      filme_value = _inpt_filme.value;

    console.dir('Buscar o filme: ' + filme_value);
    fetch(`https://www.omdbapi.com/?t=${filme_value}&apikey=843c96dc`) //1- Erro na url
      .then(response => response.json())                         //2- Chave errada
      .then(data => {
        if (data.Response === "True") {
          console.dir(data);
        
          document.querySelector('[name="nome_filme"]').value = data.Title;
          document.querySelector('[name="genero_filme"]').value = data.Genre;
          document.querySelector('[name="imagem_filme"]').value = data.Poster;
          document.querySelector('[name="ano_filme"]').value = data.Year;
          document.querySelector('[name="diretor_filme"]').value = data.Writer;
          document.querySelector('[name="atores_filme"]').value = data.Actors;
          document.querySelector('[name="tempo_filme"]').value = data.Runtime;
          document.querySelector('[name="nota_filme"]').value = data.imdbRating;
          //document.querySelector('[name="endereco_bairro"]').value = dados.bairro;
          //document.querySelector('[name="endereco_cidade_estado"]').value = dados.localidade + '/' + dados.uf;
  

        } else {
          alert(data.Error);
        }
      })
      .catch(error => console.error(error));
  });



});
function requisitaViaCepApi(cep){
  var viaCepApi = `https://viacep.com.br/ws/${cep}/json/`;
  
  fetch(viaCepApi).then(function(response){
    response.json().then(function(data){
      console.log(data);
      preencherCamposEndereco(data);
    })
  });
}

function preencherCamposEndereco(dados){
  var campoRua = document.querySelector('[name="endereco_rua"]');
  var campoBairro = document.querySelector('[name="endereco_bairro"]');
  var campoCidadeEstado = document.querySelector('[name="endereco_cidade_estado"]');
  
  if (dados != null){
    campoRua.value = dados.logradouro;
    campoBairro.value = dados.bairro;
    campoCidadeEstado.value = dados.localidade + '/' + dados.uf;
  } else {
    campoRua.value = '';
    campoBairro.value = '';
    campoCidadeEstado.value = '';
  }
}

$(function () {
  //Usar a API do ViaCep
  //Url: https://viacep.com.br/
  $(document).on('keyup change', '#signup-content [name="endereco_cep"]', function (e) {
    var _this = this,
      cep_value = _this.value.replace(/\D/g, '');
      
    if (cep_value.length == 8) {
      console.dir('Consultar CEP: ' + cep_value);
      requisitaViaCepApi(cep_value);
    } else {
      preencherCamposEndereco(null);
    }
  });

  $(document).on('click', '.buscar-filme-omdb_btn', function (e) {
    var _this = this,
      _inpt_filme = document.querySelector('.buscar-filme-omdb_inpt'),
      filme_value = _inpt_filme.value;

    console.dir('Buscar o filme: ' + filme_value);

  });

});