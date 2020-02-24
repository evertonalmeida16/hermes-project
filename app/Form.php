<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
	protected $table = 'form';

    protected $fillable = ['nome', 'sobrenome', 'email', 'data_nascimento', 'endereco', 'cidade', 'bairro', 'numero', 'cep', 'estado', 'telefones'];
}
