<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arquivo_coop extends Model
{
	protected $table = 'arquivo_coop';
	// public $timestamps = false;

  protected $fillable = [
    'tipo', 'nome', 'instituicao_id', 'ano',
  ];
}
