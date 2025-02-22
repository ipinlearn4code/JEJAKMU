<?php
namespace App\Controllers;
use App\Models\UserModel; // Pastikan ada model User
use CodeIgniter\Controller;

class AuthController extends BaseController
{
    public function login()
    {
        return view('auth/login'); // Menampilkan halaman login
    }

    public function doLogin()
    {
        $session = session();
        $model = new UserModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $model->where('email', $email)->first();

        if ($user) {
            if (password_verify($password, $user['password_hash'])) {
                // Simpan data user ke session
                $session->set([
                    'user_id' => $user['id'],
                    'email' => $user['email'],
                    'isLoggedIn' => true
                ]);
                return redirect()->to('/dashboard'); // Arahkan ke dashboard setelah login
            } else {
                return redirect()->to('/login')->with('error', 'Password salah!');
            }
        } else {
            return redirect()->to('/login')->with('error', 'Email tidak ditemukan!');
        }
    }

    public function regist()
    {
        if ($this->request->getMethod() === 'post') {
            $rules = [
                'email' => 'required|valid_email|is_unique[users.email]',
                'username' => 'required|min_length[3]|is_unique[users.username]',
                'password' => 'required|min_length[6]',
                'pass_confirm' => 'matches[password]'
            ];

            if (!$this->validate($rules)) {
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }

            $model = new UserModel();
            $data = [
                'email' => $this->request->getPost('email'),
                'username' => $this->request->getPost('username'),
                'password_hash' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'role' => 'member'
            ];

            $model->insert($data);

            return redirect()->to('/login')->with('message', 'Registration successful. Please log in.');
        }

        return view('auth/regist');
    }


    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
