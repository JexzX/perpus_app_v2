<?php namespace App\Controllers;
use App\Models\BorrowModel;
use App\Models\UserModel;
use App\Models\BookModel;

class Report extends BaseController {
    public function index() {
        $data = (new BorrowModel())
            ->select('peminjaman.*, users.username, users.role, books.title')
            ->join('users','users.id=peminjaman.user_id')
            ->join('books','books.id=peminjaman.book_id')
            ->findAll();

        return view('reports/index', ['data' => $data]);
    }
}