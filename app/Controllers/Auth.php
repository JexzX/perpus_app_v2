<?php namespace App\Controllers;
use App\Models\UserModel;
class Auth extends BaseController {
    public function login() {
        return view('auth/login');
    }
    public function attemptLogin() {
        $m = new UserModel();
        $u = $m->where('username', $this->request->getPost('username'))
               ->where('password', $this->request->getPost('password'))
               ->first();

        if ($u) {
            session()->set([
                'isLoggedIn' => true,
                'user_id' => $u['id'],
                'username' => $u['username'],
                'role' => $u['role']
            ]);
            return redirect()->to('/dashboard');
        }
        return redirect()->back()->with('error', 'Invalid credentials');
    }
    public function register() {
        return view('auth/register');
    }
    public function attemptRegister() {
        $m = new UserModel();
        $m->save([
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'role' => 'mahasiswa'
        ]);
        return redirect()->to('/')->with('success','Registered. Please login.');
    }
    public function logout() {
        session()->destroy();
        return redirect()->to('/');
    }
}