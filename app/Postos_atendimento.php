<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postos_atendimento extends Model
{
	protected $table = 'coop.postos_atendimento';
	public $timestamps = false;

  protected $fillable = [
    'cnpj', 'ano', 'nome_instituicao',
    'tipo_dependencia', 'nome_instalacao',
    'endereco', 'complemento', 'bairro',
    'cep', 'municipio', 'uf',
    'cod_municipio', 'cod_uf', 'latitude',
    'longitude',
  ];
}