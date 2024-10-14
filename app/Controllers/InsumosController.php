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

    public function edit($id)
    {
        $insumoModel = new InsumoModel();
        $insumo = $insumoModel->find($id);
    
        if ($this->request->getMethod() == 'post') {
            $validation = \Config\Services::validation();
    
            // Aquí van las reglas de validación
            $validation->setRules([
                'codigo' => 'required',
                'articulo' => 'required',
                'cantidad' => 'required|integer',
                // otras reglas de validación
            ]);
    
            if (!$validation->withRequest($this->request)->run()) {
                // Enviar errores de validación a la vista
                return view('insumos/edit', [
                    'insumo' => $insumo,
                    'validation' => $this->validator
                ]);
            }
    
            // Si pasa la validación, actualizar insumo
            $insumoModel->update($id, [
                'codigo' => $this->request->getPost('codigo'),
                'articulo' => $this->request->getPost('articulo'),
                'cantidad' => $this->request->getPost('cantidad'),
                'unidad_medida' =>$this->request->getPost('unidad_medida'),

                'ubicacion' => $this->request->getPost('ubicacion'),
                'lote' => $this->request->getPost('lote'),
                'fecha_vencimiento' => $this->request->getPost('fecha_vencimiento'),
                'observaciones' => $this->request->getPost('observaciones')
                // otros campos
            ]);
    
            return redirect()->to('/insumos');
        }
    
        return view('insumos/edit', ['insumo' => $insumo]);
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
        if ($this->request->getMethod() === 'post') {
            if ($this->insumoModel->delete($id)) {
                return redirect()->to('/insumos')->with('success', 'Insumo eliminado correctamente.');
            } else {
                return redirect()->to('/insumos')->with('error', 'Error al eliminar el insumo.');
            }
        }
        throw new \CodeIgniter\Exceptions\PageNotFoundException('No se pudo encontrar el recurso solicitado.');
    }
    
    
    

    



}
