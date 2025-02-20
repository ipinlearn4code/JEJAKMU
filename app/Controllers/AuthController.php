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

    public function logout()
    {
        session()->destroy(); // Hapus semua session
        return redirect()->to('/login');
    }
}
