<?php namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface {
    public function before(RequestInterface $request, $arguments = null) {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/');
        }
        if (isset($arguments[0]) && $arguments[0] === 'admin' && $session->get('role') !== 'admin') {
            return redirect()->to('/dashboard');
        }
    }
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {}
}