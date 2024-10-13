<?php namespace App\Controllers;

use App\Models\InsumoModel;

class InsumosController extends BaseController {
    protected $insumoModel;

    public function __construct() {
        $this->insumoModel = new InsumoModel();
    }

    public function index() {
        $data['insumos'] = $this->insumoModel->findAll(); // Esto debe devolver un array de objetos
        return view('insumos/index', $data);
    }
    

    public function create() {
        return view('insumos/create');
    }

    public function store() {
        $this->insumoModel->save([
            'codigo' => $this->request->getPost('codigo'),
            'articulo' => $this->request->getPost('articulo'),
            'cantidad' => $this->request->getPost('cantidad'),
            'unidad_medida' => $this->request->getPost('unidad_medida'),
            'ubicacion' => $this->request->getPost('ubicacion'),
            'lote' => $this->request->getPost('lote'),
            'fecha_vencimiento' => $this->request->getPost('fecha_vencimiento'),
            'observaciones' => $this->request->getPost('observaciones')
        ]);
        return redirect()->to('/insumos');
    }

    public function edit($id) {
        $data['insumo'] = $this->insumoModel->find($id);
        return view('insumos/edit', $data);
    }

    public function update($id) {
        $this->insumoModel->update($id, [
            'codigo' => $this->request->getPost('codigo'),
            'articulo' => $this->request->getPost('articulo'),
            'cantidad' => $this->request->getPost('cantidad'),
            'unidad_medida' => $this->request->getPost('unidad_medida'),
            'ubicacion' => $this->request->getPost('ubicacion'),
            'lote' => $this->request->getPost('lote'),
            'fecha_vencimiento' => $this->request->getPost('fecha_vencimiento'),
            'observaciones' => $this->request->getPost('observaciones')
        ]);
        return redirect()->to('/insumos');
    }

    public function delete($id) {
        $this->insumoModel->delete($id);
        return redirect()->to('/insumos');
    }
}
