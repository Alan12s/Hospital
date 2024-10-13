<?php namespace App\Models;

use CodeIgniter\Model;

class InsumoModel extends Model {
    protected $table = 'insumos'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id'; // Campo clave primaria
    protected $allowedFields = [
        'codigo',
        'articulo',
        'cantidad',
        'unidad_medida',
        'ubicacion',
        'lote',
        'fecha_vencimiento',
        'observaciones'
    ];

    // Configura si deseas que el resultado de findAll() sea un array asociativo o un objeto
    protected $returnType = 'object'; // O 'array' dependiendo de tu preferencia
}
