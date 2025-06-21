<?php 
namespace App\Controllers;

use App\Models\BookModel;
use App\Models\UserModel;

class Home extends BaseController {
    public function index() {
        $books = (new BookModel())->findAll();
        $users = (new UserModel())->findAll();
        return view('home', [
            'books' => $books,
            'users' => $users
        ]);
    }

    public function books() {
        $m = new BookModel();
        $q = $this->request->getGet('q');
        $books = $q ? $m->like('title', $q)->findAll() : $m->findAll();
        return view('home/books', [
            'books' => $books,
            'q' => $q
        ]);
    }

    public function users() {
        $m = new UserModel();
        $q = $this->request->getGet('q');
        $users = $q ? $m->like('username', $q)->findAll() : $m->findAll();
        return view('home/users', [
            'users' => $users,
            'q' => $q
        ]);
    }
}