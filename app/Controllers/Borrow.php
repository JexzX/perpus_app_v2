<?php 
namespace App\Controllers;

use App\Models\BookModel;
use App\Models\BorrowModel;

class Borrow extends BaseController {
    public function create() {
        return view('borrow/create', ['books' => (new BookModel())->findAll()]);
    }

    public function store(){
        $dur = $this->request->getPost('durasi');
        $hari = ['1'=>'1','3'=>'3','7'=>'7','21'=>'21','30'=>'30'][$dur];
        $tgl_pin = date('Y-m-d');
        $tgl_kem = date('Y-m-d', strtotime("+{$hari} days"));
        (new BorrowModel())->save([
            'user_id'=>session()->get('user_id'),
            'book_id'=>$this->request->getPost('book_id'),
            'tanggal_pinjam'=>$tgl_pin,
            'tanggal_kembali'=>$tgl_kem
        ]);
        return redirect()->to('/reports');
    }
}