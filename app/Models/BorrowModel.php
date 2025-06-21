<?php namespace App\Models;
use CodeIgniter\Model;
class BorrowModel extends Model {
    protected $table = 'peminjaman';
    protected $allowedFields = ['user_id','book_id','tanggal_pinjam','tanggal_kembali'];
}