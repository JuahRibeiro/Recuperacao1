<?php

namespace App\Models;

use CodeIgniter\Model;

class ArvoreModel extends Model
{
    protected $table      = 'arvores';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome_rua', 'tipo_arvore', 'descricao', 'data_corte', 'data_plantio'];
}
