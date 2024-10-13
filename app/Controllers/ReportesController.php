<?php namespace App\Controllers;

use App\Models\InsumoModel;
use App\Models\ConsumoModel;

class ReportesController extends BaseController {
    protected $insumoModel;
    protected $consumoModel;

    public function __construct() {
        $this->insumoModel = new InsumoModel();
        $this->consumoModel = new ConsumoModel();
    }

    public function consumos() {
        $data['consumos'] = $this->consumoModel->findAll();
        return view('reportes/consumos', $data);
    }

    public function stock() {
        $data['insumos'] = $this->insumoModel->findAll();
        return view('reportes/stock', $data);
    }
}
?>