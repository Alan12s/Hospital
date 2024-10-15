<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function login()
    {
        helper(['form']);
        echo view('login');
    }

    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $user = $model->where('email', $email)->first();
        
        if ($user) {
            $pass = $user['password'];
            $authenticatePassword = password_verify($password, $pass);
            if ($authenticatePassword) {
                $ses_data = [
                    'id' => $user['id'],
                    'email' => $user['email'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to(base_url('/index'));

            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
    public function checkAuth()
{
    $session = session();
    if ($session->get('logged_in')) {
        return redirect()->to(base_url('/index'));
        // Redirige al home si ya está autenticado
    } else {
        return redirect()->to('/login'); // Redirige al login si no está autenticado
    }
}

}
