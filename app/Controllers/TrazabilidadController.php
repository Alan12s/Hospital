<?php namespace App\Controllers;

use App\Models\ConsumoModel;
use App\Models\CirugiaModel;
use App\Models\InsumoModel;

class TrazabilidadController extends BaseController {
    protected $consumoModel;
    protected $cirugiaModel;
    protected $insumoModel;

    public function __construct() {
        $this->consumoModel = new ConsumoModel();
        $this->cirugiaModel = new CirugiaModel();
        $this->insumoModel = new InsumoModel();
    }

    public function index() {
        $data['consumos'] = $this->consumoModel->findAll();
        return view('trazabilidad/index', $data);
    }

    public function detalle($cirugia_id) {
        $data['consumos'] = $this->consumoModel->where('cirugia_id', $cirugia_id)->findAll();
        $data['cirugia'] = $this->cirugiaModel->find($cirugia_id);
        return view('trazabilidad/detalle', $data);
    }
}
?>