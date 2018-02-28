<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agrocoop extends Model
{
    protected $table = 'coop.instituicao_agro';
    public $timestamps = false;

  protected $fillable = [
    'cnpj', 'telefone', 'fax',
    'natureza_juridica', 'tipo',
    'situacao', 'auditor', 'endereco_eletronico',
    'codigo_compensacao', 'nome', 'endereco',
    'complemento', 'bairro', 'cep',
    'municipio', 'uf', 'tipo_cooperativa',
    'classe_cooperativa', 'site', 'categ_coop_sing',
    'filiacao', 'lat', 'long','cnpj_completo',
    'cod_municipio', 'cod_uf',
  ];
}