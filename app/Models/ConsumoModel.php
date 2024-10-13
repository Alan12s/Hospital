<?php

namespace App\Models;

use CodeIgniter\Model;

class ConsumoModel extends Model
{
    protected $table      = 'consumos';
    protected $primaryKey = 'id';

    protected $allowedFields = ['cirugia_id', 'insumo_id', 'cantidad_usada', 'fecha'];
}
