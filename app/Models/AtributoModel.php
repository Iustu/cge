<?php

namespace App\Models;

use CodeIgniter\Model;

class AtributoModel extends Model
{
    protected $table = 'atributos';
    protected $primaryKey = 'atributoId';
    protected $allowedFields = ['nome'];
}