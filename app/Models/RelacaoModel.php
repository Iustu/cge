<?php

namespace App\Models;

use CodeIgniter\Model;

class RelacaoModel extends Model
{
    protected $table = 'relacao';
    protected $primaryKey = 'id';
    protected $allowedFields = ['atributoId','pessoaId'];
}