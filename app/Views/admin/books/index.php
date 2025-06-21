<?= view('layout/header_dark') ?>
<h2>Manage Books</h2>
<a href="/admin/books/create" class="btn">+ Add Book</a>
<?php foreach($books as $b): ?>
<div class="card">
    <div class="card-title"><?= esc($b['title']) ?></div>
    <p><?= esc($b['description']) ?></p>
    <a class="btn" href="/admin/books/edit/<?= $b['id'] ?>">Edit</a>
    <a class="btn delete" href="/admin/books/delete/<?= $b['id'] ?>"
        onclick="return confirm('Are you sure?')">Delete</a>
</div>
<?php endforeach ?>
<?= view('layout/footer_dark') ?>