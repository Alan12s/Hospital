namespace App\Controllers;

use App\Models\PacienteModel;

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
