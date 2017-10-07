<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class xmlModel extends Model
{

    protected $fillable = [
      'id',
      'nrNF',
      'nomeRemetente',
      'nomeDestinatario',
      'dataEmissao',
      'valorNF'
    ];

    // Nome da tabela no banco de dados
    protected $table ='tbxml';
}
