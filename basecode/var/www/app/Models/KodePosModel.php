<?php

namespace App\Models;

use CodeIgniter\Model;

class KodePosModel extends Model
{
    protected $table      = 'kodepos';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['province', 'city', 'district', 'subdistrict', 'postal_code'];

    protected bool $allowEmptyInserts = false;
}
