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
                    Formulário Edição
                </div>
                <div class="col-lg-12">
                    <form method="POST" action="{{ route('home.update', $form->id) }}">
                      @csrf
                      <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputNome">Nome</label>
                            <input type="text" class="form-control" id="inputNome" name="nome" placeholder="Nome" required="" value="{{isset($form->nome) ? $form->nome : old('nome')}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputSobrenome">Sobrenome</label>
                            <input type="text" class="form-control" id="inputSobrenome" name="sobrenome" placeholder="Sobrenome" required="" value="{{isset($form->sobrenome) ? $form->sobrenome : old('sobrenome')}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail">E-mail</label>
                            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="E-mail" required="" value="{{isset($form->email) ? $form->email : old('email')}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputNascimento">Data de Nascimento</label>
                            <input type="date" class="form-control" id="inputNascimento" name="data_nascimento" placeholder="" value="{{isset($form->data_nascimento) ? $form->data_nascimento : old('data_nascimento')}}">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="inputCep">CEP</label>
                          <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP" required="" value="{{isset($form->cep) ? $form->cep : old('cep')}}">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputEndereço">Endereço</label>
                          <input type="text" class="form-control" id="rua" name="endereco" placeholder="Endereço" required="" value="{{isset($form->endereco) ? $form->endereco : old('endereco')}}">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputEndereço">Cidade</label>
                          <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" required="" value="{{isset($form->cidade) ? $form->cidade : old('cidade')}}">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputBairro">Bairro</label>
                          <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" required="" value="{{isset($form->bairro) ? $form->bairro : old('bairro')}}">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputNumero">Número</label>
                          <input type="text" class="form-control" id="inputNumero" name="numero" placeholder="Número" required="" value="{{isset($form->numero) ? $form->numero : old('numero')}}">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputEstado">Estado</label>
                          <select id="uf" class="form-control" name="estado">
                                <option label="" disabled selected>Selecione...</option>
                                <option value="AC" <?php if ($form->estado == 'AC') { echo 'selected'; } ?>>AC</option>
                                <option value="AL" <?php if ($form->estado == 'AL') { echo 'selected'; } ?>>AL</option>
                                <option value="AP" <?php if ($form->estado == 'AP') { echo 'selected'; } ?>>AP</option>
                                <option value="AM" <?php if ($form->estado == 'AM') { echo 'selected'; } ?>>AM</option>
                                <option value="BA" <?php if ($form->estado == 'BA') { echo 'selected'; } ?>>BA</option>
                                <option value="CE" <?php if ($form->estado == 'CE') { echo 'selected'; } ?>>CE</option>
                                <option value="DF" <?php if ($form->estado == 'DF') { echo 'selected'; } ?>>DF</option>
                                <option value="ES" <?php if ($form->estado == 'ES') { echo 'selected'; } ?>>ES</option>
                                <option value="GO" <?php if ($form->estado == 'GO') { echo 'selected'; } ?>>GO</option>
                                <option value="MA" <?php if ($form->estado == 'MA') { echo 'selected'; } ?>>MA</option>
                                <option value="MT" <?php if ($form->estado == 'MT') { echo 'selected'; } ?>>MT</option>
                                <option value="MS" <?php if ($form->estado == 'MS') { echo 'selected'; } ?>>MS</option>
                                <option value="MG" <?php if ($form->estado == 'MG') { echo 'selected'; } ?>>MG</option>
                                <option value="PA" <?php if ($form->estado == 'PA') { echo 'selected'; } ?>>PA</option>
                                <option value="PB" <?php if ($form->estado == 'PB') { echo 'selected'; } ?>>PB</option>
                                <option value="PR" <?php if ($form->estado == 'PR') { echo 'selected'; } ?>>PR</option>
                                <option value="PE" <?php if ($form->estado == 'PE') { echo 'selected'; } ?>>PE</option>
                                <option value="PI" <?php if ($form->estado == 'PI') { echo 'selected'; } ?>>PI</option>
                                <option value="RJ" <?php if ($form->estado == 'RJ') { echo 'selected'; } ?>>RJ</option>
                                <option value="RN" <?php if ($form->estado == 'RN') { echo 'selected'; } ?>>RN</option>
                                <option value="RS" <?php if ($form->estado == 'RS') { echo 'selected'; } ?>>RS</option>
                                <option value="RO" <?php if ($form->estado == 'RO') { echo 'selected'; } ?>>RO</option>
                                <option value="RR" <?php if ($form->estado == 'RR') { echo 'selected'; } ?>>RR</option>
                                <option value="SC" <?php if ($form->estado == 'SC') { echo 'selected'; } ?>>SC</option>
                                <option value="SP" <?php if ($form->estado == 'SP') { echo 'selected'; } ?>>SP</option>
                                <option value="SE" <?php if ($form->estado == 'SE') { echo 'selected'; } ?>>SE</option>
                                <option value="TO" <?php if ($form->estado == 'TO') { echo 'selected'; } ?>>TO</option>
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

                          @if(count($form->telefones))
                            @foreach($form->telefones as $index => $telefone)
                              <div class="form-group col-md-6 inputTelefoneEdit-{{$index}}">
                                 <label for="inputTelefoneEdit">Telefone</label>
                                 <input type="text" class="form-control" id="inputTelefoneEdit" name="telefones[edit][{{$index}}]" placeholder="Telefone" value="{{ $telefone }}">
                              </div>
                              <div class="col-md-6 inputTelefoneEdit-{{$index}}" style="margin-top: 32px!important;">
                                 <button type="button" class="btn btn-danger" onclick="removeLinhaEdit(<?php echo $index; ?>)">-</button>
                              </div>
                            @endforeach
                            <input type="hidden" name="increment" id="incrementEdit" value="{{ count($form->telefones) }}">
                          @endif

                          @if(count($form->telefones) < 6)
                          <div class="form-group col-md-6">
                              <label for="inputTelefone">Telefone</label>
                              <input type="text" class="form-control" id="inputTelefone" name="telefones[1]" placeholder="Telefone">
                          </div>
                          <div class="col-md-6" style="margin-top: 32px!important;">
                              <button type="button" class="btn btn-success" id="add">+</button>
                          </div>
                          @endif
                      </div>
                      <input type="hidden" name="increment" id="increment">
                      <div id="telefone" class="form-row">
                          
                      </div>

                      
                      <button type="submit" class="btn btn-primary">Editar</button>
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

function removeLinhaEdit(id)
{
   $('.inputTelefoneEdit-'+id).remove();
}

</script>