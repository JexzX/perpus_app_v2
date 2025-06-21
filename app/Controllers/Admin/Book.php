<?php namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\BookModel;

class Book extends BaseController {
    public function index() {
        return view('admin/books/index', ['books' => (new BookModel())->findAll()]);
    }
    public function create() {
        return view('admin/books/create');
    }
    public function store() {
        (new BookModel())->save($this->request->getPost());
        return redirect()->to('/admin/books');
    }
    public function edit($id) {
        return view('admin/books/edit', ['book' => (new BookModel())->find($id)]);
    }
    public function update($id) {
        (new BookModel())->update($id, $this->request->getPost());
        return redirect()->to('/admin/books');
    }
    public function delete($id) {
        (new BookModel())->delete($id);
        return redirect()->to('/admin/books');
    }
}