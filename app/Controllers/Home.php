<?php namespace App\Controllers;
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
}