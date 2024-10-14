<?php namespace App\Controllers;

use App\Models\CirugiaModel;
use App\Models\PacienteModel;

class CirugiasController extends BaseController {
    protected $cirugiaModel;
    protected $pacienteModel;

    public function __construct() {
        $this->cirugiaModel = new CirugiaModel();
        $this->pacienteModel = new PacienteModel();
    }

    public function index() {
        $data['cirugias'] = $this->cirugiaModel->findAll();
        return view('cirugias/index', $data);
    }

    public function create() {
 
        log_message('info', 'Entrando al método create de CirugiasController');
        $data['pacientes'] = $this->pacienteModel->findAll();
        return view('cirugias/create', $data);
    }
    

    public function store() {
        // Verifica que todos los datos sean recibidos correctamente
        $this->cirugiaModel->save([
            'id_paciente' => $this->request->getPost('id_paciente'),
            'descripcion' => $this->request->getPost('descripcion'),
            'id_medico' => $this->request->getPost('id_medico'),
            'fecha' => $this->request->getPost('fecha'),
            'sala' => $this->request->getPost('sala'), 
        ]);
        return redirect()->to('/cirugias');
    }
    
    

    public function edit($id) {
        $data['cirugia'] = $this->cirugiaModel->find($id);
        $data['pacientes'] = $this->pacienteModel->findAll();
        return view('cirugias/edit', $data);
    }

    public function update($id) {
        // Verifica que los datos sean actualizados correctamente
        $this->cirugiaModel->update($id, [
            'id_paciente' => $this->request->getPost('id_paciente'),
            'descripcion' => $this->request->getPost('descripcion'),
            'id_medico' => $this->request->getPost('id_medico'),
            'fecha' => $this->request->getPost('fecha'),
            'sala' => $this->request->getPost('sala')
        ]);
        return redirect()->to('/cirugias');
    }
    

    public function delete($id) {
        $this->cirugiaModel->delete($id);
        return redirect()->to('/cirugias');
    }
}

class PacientesController extends BaseController {
    protected $pacienteModel;

    public function __construct() {
        $this->pacienteModel = new PacienteModel();
    }

    public function index() {
        $data['pacientes'] = $this->pacienteModel->findAll();
        return view('pacientes/index', $data);
    }

    public function create() {
        return view('pacientes/create');
    }

    public function store() {
        // Asegúrate de que los campos que estás guardando coincidan con los de la base de datos
        $this->pacienteModel->save([
            'nombre' => $this->request->getPost('nombre'),
            'dni' => $this->request->getPost('dni'), // Asegúrate de tener este campo en el formulario
            'telefono' => $this->request->getPost('telefono'), // Asegúrate de tener este campo en el formulario
            'direccion' => $this->request->getPost('direccion') // Asegúrate de tener este campo en el formulario
        ]);
        return redirect()->to('/pacientes');
    }

    public function edit($id) {
        $data['paciente'] = $this->pacienteModel->find($id);
        return view('pacientes/edit', $data);
    }

    public function update($id) {
        $this->pacienteModel->update($id, [
            'nombre' => $this->request->getPost('nombre'),
            'dni' => $this->request->getPost('dni'), // Asegúrate de tener este campo en el formulario
            'telefono' => $this->request->getPost('telefono'), // Asegúrate de tener este campo en el formulario
            'direccion' => $this->request->getPost('direccion') // Asegúrate de tener este campo en el formulario
        ]);
        return redirect()->to('/pacientes');
    }

    public function delete($id) {
        $this->pacienteModel->delete($id);
        return redirect()->to('/pacientes');
    }
}

?>