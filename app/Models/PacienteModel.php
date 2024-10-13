<?php

namespace App\Models;

use CodeIgniter\Model;

class PacienteModel extends Model
{
    protected $table      = 'pacientes';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nombre', 'dni', 'telefono', 'direccion'];
}

