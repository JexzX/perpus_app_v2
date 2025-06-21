<?=view('layout/header')?>
<h2>Manage Books</h2>
<a href="/admin/books/create" class="button">+ Add Book</a><br><br>
<?php foreach($books as $b): ?>
<div class="card">
    <strong><?=esc($b['title'])?></strong><br>
    <?=esc($b['description'])?><br>
    <a href="/admin/books/edit/<?=$b['id']?>">Edit</a> |
    <a href="/admin/books/delete/<?=$b['id']?>" onclick="return confirm('Sure?')">Delete</a>
</div>
<?php endforeach ?>
<?=view('layout/footer')?>