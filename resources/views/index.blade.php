<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Project - Formulário</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-primary">
                <span>{{session('success')}}</span>
            </div>
        @endif
        <div class="flex-center full-height">
            <div class="">
                <div class="title">
                    Formulário
                </div>
                <div class="col-lg-12">
                    <form method="POST" action="{{ route('home.store') }}">
                      @csrf
                      <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputNome">Nome</label>
                            <input type="text" class="form-control" id="inputNome" name="nome" placeholder="Nome" required="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputSobrenome">Sobrenome</label>
                            <input type="text" class="form-control" id="inputSobrenome" name="sobrenome" placeholder="Sobrenome" required="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail">E-mail</label>
                            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="E-mail" required="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputNascimento">Data de Nascimento</label>
                            <input type="date" class="form-control" id="inputNascimento" name="data_nascimento" placeholder="">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="inputCep">CEP</label>
                          <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP" required="">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputEndereço">Endereço</label>
                          <input type="text" class="form-control" id="rua" name="endereco" placeholder="Endereço" required="">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputEndereço">Cidade</label>
                          <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" required="">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputBairro">Bairro</label>
                          <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" required="">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputNumero">Número</label>
                          <input type="text" class="form-control" id="inputNumero" name="numero" placeholder="Número" required="">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputEstado">Estado</label>
                          <select id="uf" class="form-control" name="estado">
                                <option label="" disabled selected>Selecione...</option>
                                <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AP">AP</option>
                                <option value="AM">AM</option>
                                <option value="BA">BA</option>
                                <option value="CE">CE</option>
                                <option value="DF">DF</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MT">MT</option>
                                <option value="MS">MS</option>
                                <option value="MG">MG</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PR">PR</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RS">RS</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="SC">SC</option>
                                <option value="SP">SP</option>
                                <option value="SE">SE</option>
                                <option value="TO">TO</option> 
                          </select>
                        </div>
                      </div>

                      <div class="form-row">
                          <div class="col-md-12">
                              <hr>
                          </div>

                          <div class="col-md-12">
                              <p class="h1">Contato</p>
                          </div>
                          <br>
                          <div class="form-group col-md-6">
                              <label for="inputTelefone">Telefone</label>
                              <input type="text" class="form-control" id="inputTelefone" name="telefones[1]" placeholder="Telefone" required="">
                          </div>
                          <div class="col-md-6" style="margin-top: 32px!important;">
                              <button type="button" class="btn btn-success" id="add">+</button>
                          </div>
                      </div>
                      <input type="hidden" name="increment" id="increment">
                      <div id="telefone" class="form-row">
                          
                      </div>

                      
                      <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script type="text/javascript">

$i = 2;
$("#add").click(function(){

    if ($("#increment").val() > 0)
        $i = $("#increment").val();

    if($("#increment").val() < 7){
        $servicos = $("#telefone");
        $container = '<div class="form-group col-md-6 '+$i+'">' 
                            +'<label for="inputTelefone">Telefone</label>'
                            +'<input type="text" class="form-control" name="telefones['+$i+']" placeholder="Telefone">'
                        +'</div>'
                        +'<div class="col-md-6 '+$i+'" style="margin-top: 32px!important;">'
                            +'<button type="button" class="btn btn-danger" onclick=removeLinha('+$i+')>-</button>'
                        +'</div>';

        $servicos.append($container);
        
        
        $i++;
        $("#increment").val($i);
    }


});

function removeLinha(id)
{
    $('.'+id).remove();

    var remove = $("#increment").val() - 1;
    $("#increment").val(remove);
}


$(document).ready(function() {

    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#rua").val("");
        $("#bairro").val("");
        $("#cidade").val("");
        $("#uf").val("");
        $("#ibge").val("");
    }
    
    //Quando o campo cep perde o foco.
    $("#cep").blur(function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#rua").val("...");
                $("#bairro").val("...");
                $("#cidade").val("...");
                $("#uf").val("...");
                $("#ibge").val("...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#rua").val(dados.logradouro);
                        $("#bairro").val(dados.bairro);
                        $("#cidade").val(dados.localidade);
                        $("#uf").val(dados.uf);
                        $("#ibge").val(dados.ibge);
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    });
});

</script>