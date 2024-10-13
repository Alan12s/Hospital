<?php

namespace App\Models;

use CodeIgniter\Model;

class CirugiaModel extends Model
{
    protected $table      = 'cirugias';
    protected $primaryKey = 'id';

    protected $allowedFields = ['id_paciente', 'id_medico', 'sala', 'fecha', 'descripcion'];
}

