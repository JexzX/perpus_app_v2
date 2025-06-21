<?php 
namespace App\Controllers;

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

    public function edit($id){
        $d = (new BorrowModel())->find($id);
        return view('reports/edit', ['d'=>$d,'books'=> (new BookModel())->findAll()]);
    }

    public function update($id){
        (new BorrowModel())->update($id, [
          'book_id'=>$this->request->getPost('book_id'),
          'tanggal_pinjam'=>$this->request->getPost('tanggal_pinjam'),
          'tanggal_kembali'=>$this->request->getPost('tanggal_kembali')
        ]);
        return redirect()->to('/reports');
    }

    public function delete($id){
        (new BorrowModel())->delete($id);
        return redirect()->to('/reports');
    }
}